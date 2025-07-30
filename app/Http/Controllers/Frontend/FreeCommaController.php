<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FreeCommaController extends Controller
{
    public function FreeCommaController()
    {
        return view('FreeComma.freecommatool');
    }

    // public function index()
    // {
    //     return view('delim');
    // }

    // public function convert(Request $request)
    // {
    //     $data = $request->input('input_data');
    //     $delimiter = $request->input('delimiter', ',');
    //     $removeDuplicates = $request->has('remove_duplicates');
    //     $trimWhitespace = $request->has('trim_whitespace');

    //     $lines = preg_split('/\r\n|\r|\n/', $data);

    //     if ($trimWhitespace) {
    //         $lines = array_map('trim', $lines);
    //     }

    //     if ($removeDuplicates) {
    //         $lines = array_unique($lines);
    //     }

    //     $lines = array_filter($lines); // Remove empty lines

    //     $output = implode($delimiter, $lines);
    //     $count = count($lines);

    //     return view('FreeComma.freecommatool', compact('data', 'output', 'delimiter', 'count'));
    // }





    // public function process(Request $request)
    // {
    //     $request->validate([
    //         'input_text' => 'required|string',
    //         'delimiter' => 'required|string',
    //         'operation' => 'required|string',
    //     ]);

    //     $input = $request->input_text;
    //     $delimiter = $request->delimiter;
    //     $operation = $request->operation;

    //     $result = $this->processText($input, $delimiter, $operation);

    //     return response()->json([
    //         'result' => $result,
    //         'char_count' => strlen($result),
    //         'item_count' => $operation === 'delimit' ?
    //             count(explode($delimiter === 'newline' ? "\n" : $delimiter, $input)) :
    //             count(explode(',', $result))
    //     ]);
    // }

    // private function processText($input, $delimiter, $operation)
    // {
    //     if ($operation === 'delimit') {
    //         // Replace spaces/newlines with commas
    //         $processed = preg_replace('/\s+/', ',', $input);

    //         // Remove empty items and duplicates
    //         $items = array_filter(array_unique(explode(',', $processed)));

    //         // Join with selected delimiter
    //         $delimiter = $delimiter === 'newline' ? "\n" : $delimiter;
    //         return implode($delimiter, $items);
    //     } else {
    //         // Undelimit operation
    //         $delimiter = $delimiter === 'newline' ? "\n" : $delimiter;
    //         $items = array_filter(explode($delimiter, $input));
    //         return implode(',', $items);
    //     }
    // }






    public function process(Request $request)
    {
        $request->validate([
            'input_text' => 'required|string',
            'delimiter' => 'required|string',
            'operation' => 'required|string',
            'remove_duplicates' => 'sometimes|boolean'
        ]);

        $input = $request->input_text;
        $delimiter = $request->delimiter;
        $operation = $request->operation;
        $removeDuplicates = $request->remove_duplicates ?? true;

        $result = $this->processText($input, $delimiter, $operation, $removeDuplicates);

        return response()->json([
            'result' => $result,
            'char_count' => strlen($result),
            'item_count' => count(explode($delimiter === 'newline' ? "\n" : $delimiter, $result))
        ]);
    }

    private function processText($input, $delimiter, $operation, $removeDuplicates)
    {
        // Normalize line endings
        $input = str_replace(["\r\n", "\r"], "\n", $input);

        // Split into items
        $items = preg_split('/\n/', $input);

        // Trim whitespace from each item
        $items = array_map('trim', $items);

        // Remove empty items
        $items = array_filter($items, function ($item) {
            return $item !== '';
        });

        // Remove duplicates if requested
        if ($removeDuplicates) {
            $items = array_unique($items);
        }

        // Convert delimiter for display
        $outputDelimiter = $delimiter === 'newline' ? "\n" : $delimiter;

        return implode($outputDelimiter, $items);
    }
}
