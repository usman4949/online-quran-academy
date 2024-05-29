@extends('dashboard_template.layout')

@section('main_content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Registration Details</h1>
    </div>
    <!-- End Page Title -->
    <section class="section dashboard">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Username:</strong> {{ $registration->username }}</p>
                    <p><strong>Father's Name:</strong> {{ $registration->fathername }}</p>
                    <p><strong>Email:</strong> {{ $registration->email }}</p>
                    <p><strong>Date of Birth:</strong> {{ $registration->birth }}</p>
                    <p><strong>Gender:</strong> {{ $registration->gender }}</p>
                    <p><strong>WhatsApp Number:</strong> {{ $registration->whatsapp }}</p>
                    <p><strong>Phone Number:</strong> {{ $registration->phone_number }}</p>
                    <p><strong>Skype ID:</strong> {{ $registration->skype }}</p>
                    <p><strong>Address:</strong> {{ $registration->address }}</p>
                    <p><strong>Country:</strong> {{ $registration->country }}</p>
                    <p><strong>State:</strong> {{ $registration->state }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title">User Courses</h3>
                </div>
                <div class="card-body">
                    <p><strong>Courses:</strong> {{ $registration->courses }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title">Contact Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Classes Per Week:</strong> {{ $registration->classes_per_week }}</p>
                    <p><strong>Best Contact Time:</strong> {{ $registration->contact_time }}</p>
                    <p><strong>Preferred Teacher Gender:</strong> {{ $registration->teacher_gender }}</p>
                </div>
            </div>
        </div>
    </section>
</main>
 
@endsection