<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirmpassword' => 'required|same:password',
            'phone_number' => 'required',
        ]);

        // Create a new user instance
        $user = new User();
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->phone_number = $validatedData['phone_number'];
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('/signup')->with('success', 'Signup Successful!');
    }

    public function login(Request $request)
    {
        // Validate the incoming request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Authentication was successful
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            // Authentication failed
            return redirect('/login')->with('error', 'Invalid credentials!');
        }
    }
}
