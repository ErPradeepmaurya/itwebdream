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

    public function emicalculator()
    {
        return view('FreeComma.emicalculator');
    }
}
