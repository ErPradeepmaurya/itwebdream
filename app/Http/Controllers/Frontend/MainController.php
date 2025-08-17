<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RajasthanRequest;

class MainController extends Controller
{
    private function renderView($viewName)
    {
        $canonical = url()->current(); // Generate canonical URL
        return view($viewName, compact('canonical'));
    }

    public function index()
    {
        return $this->renderView('welcome');
    }

    public function termsconditions()
    {
        return $this->renderView('terms-conditions');
    }

    public function privacypolicy()
    {
        return $this->renderView('privacy-policy');
    }

    public function faq()
    {
        return $this->renderView('faq');
    }

    public function aboutus()
    {
        return $this->renderView('aboutus');
    }

    public function customwebdevelopment()
    {
        return $this->renderView('custome-web-development');
    }

    public function webdevelopment()
    {
        return $this->renderView('web-development');
    }

    public function appdevelopment()
    {
        return $this->renderView('app-development');
    }

    public function uiuxdesign()
    {
        return $this->renderView('ui-ux-design');
    }

    public function commingsoon()
    {
        return $this->renderView('comming-soon');
    }

    public function technology()
    {
        return $this->renderView('technology');
    }

    public function contactus()
    {
        return $this->renderView('contact-us');
    }

    public function sitemap()
    {
        $content = view('sitemap')->render();
        return response($content, 200)->header('Content-Type', 'application/xml');
    }

    public function mpwebdevelopment()
    {
        return $this->renderView('mp-web-development');
    }

    public function submit_rajasthan(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email',
            'mobile_number' => 'required|digits:10',
            'project_type'  => 'required|string',
        ]);
        $ipAddress = $request->ip();
        $ipCount = RajasthanRequest::where('ip_address', $ipAddress)->count();
        if ($ipCount >= 5) {
            return redirect()->back()->with('error', 'You have reached the maximum number of submissions. Please wait while we review your request and get back to you shortly');
        }

        $location = null;
        try {
            $details = json_decode(file_get_contents("http://ip-api.com/json/{$ipAddress}"));
            if ($details && $details->status === "success") {
                $location = $details->city . ', ' . $details->regionName . ', ' . $details->country;
            }
        } catch (\Exception $e) {
            $location = null;
        }

        try {
            RajasthanRequest::create([
                'name'           => $request->name,
                'email'          => $request->email,
                'mobile_number'  => $request->mobile_number,
                'company'        => $request->company_name,
                'project_type'   => $request->project_type,
                'project_details' => $request->project_details,
                'ip_address'     => $ipAddress,
                'location'       => $location,
            ]);

            return redirect()->back()->with('success', 'Your request has been submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong. Please try again.');
        }
    }


    public function urbanclone()
    {
        return $this->renderView('urbanclone');
    }
}
