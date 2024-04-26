<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(){
    return view('pages/landing_pages/index');
}
public function signup(){
    return view('pages/auth/signup');
}
}
