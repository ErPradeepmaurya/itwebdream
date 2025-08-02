<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function index2()
    {
        return view('welcome2');
    }
    public function termsconditions()
    {
        return view('terms-conditions');
    }
    public function privacypolicy()
    {
        return view('privacy-policy');
    }
    public function faq()
    {
        return view('faq');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
    public function customwebdevelopment()
    {
        return view('custome-web-development');
    }
    public function webdevelopment()
    {
        return view('web-development');
    }
    public function appdevelopment()
    {
        return view('app-development');
    }
    public function uiuxdesign()
    {
        return view('ui-ux-design');
    }

    public function commingsoon()
    {
        return view('comming-soon');
    }

    public function technology()
    {
        return view('technology');
    }

    public function contactus()
    {
        return view('contact-us');
    }

    public function sitemap()
    {
        $content = view('sitemap')->render();
        return response($content, 200)->header('Content-Type', 'application/xml');
    }
}
