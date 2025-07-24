<?php

// Controller
namespace App\Http\Controllers;

class WebController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
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

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}