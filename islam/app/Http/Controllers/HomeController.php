<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages/landing_pages/index');
    }
    public function read_quran()
    {
        return view('pages/landing_pages/read-quran');
    }
    public function cources()
    {
        return view('pages/landing_pages/cources');
    }
    public function teachers()
    {
        return view('pages/landing_pages/teachers');
    }
    public function login()
    {
        return view('pages/auth/login');
    }
    public function signup()
    {
        return view('pages/auth/signup');
    }
    public function contact()
    {
        return view('pages/landing_pages/contact');
    }
}
