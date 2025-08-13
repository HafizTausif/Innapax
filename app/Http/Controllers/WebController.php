<?php

// Controller
namespace App\Http\Controllers;

use App\Models\User;

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
    $users = User::where('role', 'user') // Only regular users
               ->orderBy('last_seen', 'desc')
               ->paginate(12);
               
    return view('explore', compact('users'));
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