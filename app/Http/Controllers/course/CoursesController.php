<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CoursesModel;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = CoursesModel::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'join_students' => 'required',
            'certified_students' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        CoursesModel::create($request->all());

        return redirect()->route('courses.index')
                        ->with('success', 'Course created successfully.');
    }

    public function show(CoursesModel $course)
    {
        return view('courses.show', compact('course'));
    }

    public function edit(CoursesModel $course)
    {
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, CoursesModel $course)
    {
        $request->validate([
            'course_title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'join_students' => 'required',
            'certified_students' => 'required',
            'image' => 'required',
            'status' => 'required',
        ]);

        $course->update($request->all());

        return redirect()->route('courses.index')
                        ->with('success', 'Course updated successfully.');
    }

    public function destroy(CoursesModel $course)
    {
        $course->delete();

        return redirect()->route('courses.index')
                        ->with('success', 'Course deleted successfully.');
    }
}
