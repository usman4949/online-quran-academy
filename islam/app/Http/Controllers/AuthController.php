<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\AuthModel;
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
            'phone_number' => 'required',
        ]);

        try {
            // Create a new user instance
            $user = new User();
            $user->username = $validatedData['username'];
            $user->email = $validatedData['email'];
            $user->password = bcrypt($validatedData['password']);
            $user->phone_number = $validatedData['phone_number'];
            $user->role_id = $request->role_id;
            $user->save();

            // Return success response
            return response()->json(['success' => true, 'message' => 'Signup successful!']);
        } catch (\Exception $e) {
            // Return error response
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }


}
