<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        return view('enrollments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'StudentID' => 'required|integer',
            'CourseID' => 'required|integer',
            'EnrollmentDate' => 'required|date',
        ]);

        Enrollment::create($request->all());
        return redirect()->route('enrollments.index')->with('success', 'Enrollment created successfully.');
    }

    public function edit($EnrollmentID)
    {
        $enrollment = Enrollment::findOrFail($EnrollmentID);
        return view('enrollments.edit', compact('enrollment'));
    }

    public function update(Request $request, $EnrollmentID)
    {
        $enrollment = Enrollment::findOrFail($EnrollmentID);

        $request->validate([
            'StudentID' => 'required|integer',
            'CourseID' => 'required|integer',
            'EnrollmentDate' => 'required|date',
        ]);

        $enrollment->update($request->all());
        return redirect()->route('enrollments.index')->with('success', 'Enrollment updated successfully.');
    }

    public function destroy($EnrollmentID)
    {
        $enrollment = Enrollment::findOrFail($EnrollmentID);
        $enrollment->delete();
        return redirect()->route('enrollments.index')->with('success', 'Enrollment deleted successfully.');
    }
}
