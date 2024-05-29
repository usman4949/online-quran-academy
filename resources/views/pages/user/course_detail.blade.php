@extends('dashboard_template.layout')

@section('main_content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Applied Course Details</h1>
    </div>

    <!-- End Page Title -->
    <section class="section dashboard">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Course Title:</strong> {{ $course->course_title }}</p>
                    <p><strong>Description:</strong> {{ $course->description }}</p>
                    <p><strong>Duration:</strong> {{ $course->duration }}</p>
                    <p><strong>Price:</strong> {{ $course->price }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title">Student Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Joined Students:</strong> {{ $course->join_students }}</p>
                    <p><strong>Certified Students:</strong> {{ $course->certified_students }}</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title">Additional Information</h3>
                </div>
                <div class="card-body">
                    <p><strong>Status:</strong> {{ $course->status }}</p>
                    <p><strong>Course Image:</strong></p>
                    <img src="{{ asset('assets/images/courses/' . $course->image) }}" alt="Course Image"
                        class="img-fluid">
                </div>
            </div>
        </div>
    </section>

</main>

@endsection