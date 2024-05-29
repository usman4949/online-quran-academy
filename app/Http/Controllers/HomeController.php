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
    public function products()
    {
        return view('pages/landing_pages/products');
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
    public function service1()
    {
        return view('pages/services/service1');
    }
    public function service2()
    {
        return view('pages/services/service2');
    }
    public function service3()
    {
        return view('pages/services/service3');
    }
    public function service4()
    {
        return view('pages/services/service4');
    }
    public function service5()
    {
        return view('pages/services/service5');
    }
    public function service6()
    {
        return view('pages/services/service6');
    }
}