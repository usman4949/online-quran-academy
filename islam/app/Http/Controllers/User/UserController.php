<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function user_profile()
    {
        $user = Auth::user();
        return view('pages/user/profile', ['user' => $user]);
    }
    public function dashboard()
    {
        $user = Auth::user();
        return view('pages/user/dashboard', ['user' => $user]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        // Invalidate the session
        $request->session()->invalidate();
        // Clear the remember me token
        $request->session()->regenerateToken();
        // Redirect the user to the login page with a success message
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }

}
