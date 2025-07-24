<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }
    
    public function explore()
    {
        return view('explore');
    }
    
    public function profiles()
    {
        return view('profiles');
    }
    
    public function services()
    {
        return view('services');
    }
    
    public function contact()
    {
        return view('contact');
    }
}