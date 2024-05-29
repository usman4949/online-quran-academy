@extends('dashboard_template.layout')

@section('main_content')

<main id="main" class="main">

    <!-- Teacher Details Section -->
    <section class="teacher-details-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Teacher Details</h2>

            <!-- Personal Information Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Personal Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Instructor Name:</strong>name</p>
                    <p><strong>Date of Birth:</strong>date_of_birth</p>
                    <p><strong>Gender:</strong>gender</p>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Contact Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Email:</strong>email</p>
                    <p><strong>Phone Number:</strong>phone_no</p>
                    <p><strong>Facebook Account:</strong> <a href="->facebook_account"
                            target="_blank">->facebook_account</a></p>
                </div>
            </div>

            <!-- Location Information Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Location Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Address:</strong>address</p>
                    <p><strong>Country:</strong>country</p>
                </div>
            </div>

            <!-- Qualification Section -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Qualifications</h3>
                </div>
                <div class="card-body">
                    <p><strong>Specialization:</strong>specialization</p>
                    <p><strong>Availability Schedule:</strong>availability_schedule</p>
                    <p><strong>English Language Level:</strong>english_language_level</p>
                    <p><strong>Other Skills:</strong>other_skills</p>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection