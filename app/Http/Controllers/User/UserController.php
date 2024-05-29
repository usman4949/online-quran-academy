<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Registration;
use App\Models\CourcesModel;
use App\Models\Attendance;

class UserController extends Controller {
    public function dashboard() {
        $user = Auth::user();
        return view( 'pages/user/dashboard', [ 'user' => $user ] );
    }

    public function user_profile() {
        $user = Auth::user();
        return view( 'pages/user/profile', [ 'user' => $user ] );
    }

    public function help() {
        return view( 'pages/user/help' );
    }

    public function donate() {
        return view( 'pages/user/donate' );
    }

    public function assigned_teacher() {
        return view( 'pages/user/assigned_teacher' );
    }

    protected function store_attendance(Request $request, $user)
    {
        // Fetch the course ID based on user's registration details
        $registration = Registration::where('user_id', $user->id)->first();
        // @php
        var_dump($registration);
        // @endphp
        if ($registration) {
            $courseId = $registration->course_id;
    
            $today = now()->format('Y-m-d');
            $attendanceExists = Attendance::where('user_id', $user->id)
                ->where('course_id', $courseId)
                ->whereDate('date', $today)
                ->exists();
    
            if (!$attendanceExists) {
                // If attendance doesn't exist and user is registered, create a new record
                Attendance::create([
                    'user_id' => $user->id,
                    'course_id' => $courseId,
                    'date' => $today,
                ]);
            }
        }
        return redirect()->route('attendace');
    }    

    public function attendance() {
        return view( 'pages/user/attendance' );
    }

    public function user_registeration() {
        $user = Auth::user();
        // Fetch registration associated with the authenticated user
        $registration = Registration::where( 'user_id', $user->id )->first();
        if ( $registration ) {
            return view( 'pages.user.registration_detail', [ 'registration' => $registration ] );
        } else {
            return view( 'pages.user.registration', [ 'user' => $user ] );
        }
    }

    public function getStates( Request $request ) {
        $states = State::where( 'country_id', $request->country_id )->pluck( 'name', 'id' );
        return response()->json( $states );
    }

    public function store_registeration( Request $request ) {
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
        $request->validate( $rules );

        // Create a new user instance
        $registration = new Registration();
        $registration->user_id = Auth::id();
        $registration->course_id = $request->input( 'course_id', 3 );
        $registration->username = $request->input( 'username' );
        $registration->fathername = $request->input( 'fathername' );
        $registration->email = $request->input( 'email' );
        $registration->gender = $request->input( 'gender' );
        $registration->birth = $request->input( 'birth' );
        $registration->phone_number = $request->input( 'phone_number' );
        $registration->whatsapp = $request->input( 'whatsapp' );
        $registration->skype = $request->input( 'skype' );
        $registration->address = $request->input( 'address' );
        $registration->classes_per_week = $request->input( 'classes_per_week' );
        $registration->contact_time = $request->input( 'contact_time' );
        $registration->teacher_gender = $request->input( 'teacher_gender' );
        $registration->country = $request->input( 'country' );
        $registration->state = $request->input( 'state' );
        $registration->language = $request->input( 'language' );
        $registration->courses = $request->input( 'courses' );
        $registration->referred = $request->input( 'referred' );
        // Upload image if provided
        if ( $request->hasFile( 'image' ) ) {
            $image = $request->file( 'image' );
            $imageName = $image->getClientOriginalName();
            $image->move( public_path( 'assets/images/registration' ), $imageName );
            $registration->image = $imageName;
        }
        // dd( $request->all() );
        // Save the user
        $registration->save();
        return redirect()->route( 'user_registeration', [ 'id' => $registration->id ] );
    }

    public function registration_detail() {
        $user = Auth::Registration();
        return view( 'pages/user/registration_detail', [ 'user' => $user ] );
    }

    public function course_detail() {
        // Get the authenticated user
        $user = Auth::user();

        // Fetch the course details by joining registrations and courses tables
        $course = DB::table( 'courses' )
        ->join( 'registrations', 'courses.id', '=', 'registrations.course_id' )
        ->where( 'registrations.user_id', $user->id )
        ->select( 'courses.*' )
        ->first();

        if ( $course ) {
            // Pass the course data to the view
            return view( 'pages.user.course_detail', [ 'course' => $course ] );
        } else {
            // Redirect to dashboard if no course is found for the user's registration
                return redirect()->route('user_registeration')->with('error', 'Please first fill the Registration Form.');
            }
    }

    public function logout( Request $request ) {
        Auth::logout();
        // Invalidate the session
        $request->session()->invalidate();
        // Clear the remember me token
        $request->session()->regenerateToken();
        // Redirect the user to the login page with a success message
        return redirect( '/' )->with( 'success', 'You have been logged out successfully.' );
        }

    }