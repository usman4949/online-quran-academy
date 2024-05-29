@extends('dashboard_template.layout')

@section('main_content')

<main id="main" class="main">

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Attendance Records</h3>
            </div>
            <div class="card-body">
                @if($attendances->isEmpty())
                <p>No attendance records found.</p>
                @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Course ID</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attendances as $attendance)
                        <tr>
                            <td>{{ $attendance->user_id }}</td>
                            <td>{{ $attendance->course_id }}</td>
                            <td>{{ $attendance->date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>

</main>

@endsection