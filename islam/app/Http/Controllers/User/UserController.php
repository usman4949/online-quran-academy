<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

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

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'firstname' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'fathername' => 'required|string|max:255',
            'mothername' => 'nullable|string|max:255',
            'idcard' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsappnumber' => 'required|string|max:255',
            'phone_number' => 'required|string|max:255',
            'skypeid' => 'nullable|string|max:255',
            'emoid' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|string|in:Male,Female,Other',
            'tradename' => 'nullable|string|max:255',
            'language' => 'nullable|string|max:255',
            'class_timetable' => 'nullable|string|max:255',
            'classes_per_week' => 'nullable|integer',
            'address' => 'nullable|string',
            'passport_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'idcard_front' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'idcard_back' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'matric_degree' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'agree_terms' => 'required|accepted',
        ];

        // Validate the request
        $request->validate($rules);

        // Create a new user instance
        $user = new User();
        $user->firstname = $request->input('firstname');
        $user->nickname = $request->input('nickname');
        $user->fathername = $request->input('fathername');
        $user->mothername = $request->input('mothername');
        $user->idcard = $request->input('idcard');
        $user->email = $request->input('email');
        $user->whatsappnumber = $request->input('whatsappnumber');
        $user->phone_number = $request->input('phone_number');
        $user->skypeid = $request->input('skypeid');
        $user->emoid = $request->input('emoid');
        $user->country = $request->input('country');
        $user->state = $request->input('state');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->gender = $request->input('gender');
        $user->tradename = $request->input('tradename');
        $user->language = $request->input('language');
        $user->class_timetable = $request->input('class_timetable');
        $user->classes_per_week = $request->input('classes_per_week');
        $user->address = $request->input('address');

        // Upload images if provided
        if ($request->hasFile('passport_image')) {
            $passportImage = $request->file('passport_image');
            $passportImageName = time() . '_' . $passportImage->getClientOriginalName();
            $passportImage->move(public_path('uploads'), $passportImageName);
            $user->passport_image = $passportImageName;
        }
        if ($request->hasFile('idcard_front')) {
            $idCardFront = $request->file('idcard_front');
            $idCardFrontName = time() . '_' . $idCardFront->getClientOriginalName();
            $idCardFront->move(public_path('uploads'), $idCardFrontName);
            $user->idcard_front = $idCardFrontName;
        }
        if ($request->hasFile('idcard_back')) {
            $idCardBack = $request->file('idcard_back');
            $idCardBackName = time() . '_' . $idCardBack->getClientOriginalName();
            $idCardBack->move(public_path('uploads'), $idCardBackName);
            $user->idcard_back = $idCardBackName;
        }
        if ($request->hasFile('matric_degree')) {
            $matricDegree = $request->file('matric_degree');
            $matricDegreeName = time() . '_' . $matricDegree->getClientOriginalName();
            $matricDegree->move(public_path('uploads'), $matricDegreeName);
            $user->matric_degree = $matricDegreeName;
        }

        // Save the user
        $user->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'User created successfully!');
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