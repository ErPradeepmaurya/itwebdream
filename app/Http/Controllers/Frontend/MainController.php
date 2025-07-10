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

    public function sitemap()
    {
        $content = view('sitemap')->render();
        return response($content, 200)->header('Content-Type', 'application/xml');
    }
}
