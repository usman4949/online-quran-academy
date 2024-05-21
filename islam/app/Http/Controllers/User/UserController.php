<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Registration;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();
        return view('pages/user/dashboard', ['user' => $user]);
    }

    public function user_profile()
    {
        $user = Auth::user();
        return view('pages/user/profile', ['user' => $user]);
    }

    public function user_registeration()
    {
        $user = Auth::user();
        return view('pages/user/registration', ['user' => $user]);
    }

    public function getStates(Request $request)
     {
        $states = State::where('country_id', $request->country_id)->pluck('name', 'id');
        return response()->json($states);
    }

    public function store_registeration(Request $request)
    {
        $rules = [
            'username' => 'required',
            'fathername' => 'required',
            'email' => 'required',
            'birth' => 'required',
            'gender' => 'required',
            'whatsapp' => 'required',
            'phone_number' => 'required',
            'skype' => 'required',
            'address' => 'required',
            'classes_per_week' => 'required',
            'contact_time' => 'required',
            'teacher_gender' => 'required',
            'country' => 'required',
            'state' => 'required',
            'language' => 'required',
            'courses' => 'required',
            'referred' => 'required',
            'image' => 'required',
            'agree_terms' => 'required',
        ];

        // Validate the request
        $request->validate($rules);

        // Create a new user instance
        $user = new Registration();
        $user->username = $request->input('username');
        $user->fathername = $request->input('fathername');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->birth = $request->input('birth');
        $user->phone_number = $request->input('phone_number');
        $user->whatsapp = $request->input('whatsapp');
        $user->skype = $request->input('skype');
        $user->address = $request->input('address');
        $user->classes_per_week = $request->input('classes_per_week');
        $user->contact_time = $request->input('contact_time');
        $user->teacher_gender = $request->input('teacher_gender');
        $user->country = $request->input('country');
        $user->state = $request->input('state');
        $user->language = $request->input('language');
        $user->courses = $request->input('courses');
        $user->referred = $request->input('referred');
        // Upload image if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('assets/images/registration'), $imageName);
            $user->image = $imageName;
        }
        // dd($request->all());
        // Save the user
        $user->save();
        return redirect()->route('registration_detail', ['id' => $user->id]);
    }

    public function registration_detail()
    {
        $user = Auth::registration();
        return view('pages/user/registration_detail', ['user' => $user]);
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