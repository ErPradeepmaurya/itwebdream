<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
