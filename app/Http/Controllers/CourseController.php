<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'CourseName' => 'required|string|max:255',
            'CourseDescription' => 'nullable|string',
        ]);

        Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function edit($CourseID)
    {
        $course = Course::findOrFail($CourseID);
        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $CourseID)
    {
        $course = Course::findOrFail($CourseID);

        $request->validate([
            'CourseName' => 'required|string|max:255',
            'CourseDescription' => 'nullable|string',
        ]);

        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($CourseID)
    {
        $course = Course::findOrFail($CourseID);
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
