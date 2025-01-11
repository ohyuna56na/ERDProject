<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        $assignments = Assignment::all(); // Ambil semua data assignment
        return view('assignments.index', compact('assignments'));
    }

    public function create()
    {
        return view('assignments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'AssignmentName' => 'required|string|max:255',
            'CourseID' => 'required|integer',
            'DueDate' => 'required|date',
        ]);

        Assignment::create($request->all());

        return redirect()->route('assignments.index')->with('success', 'Assignment created successfully.');
    }

    public function edit($AssignmentID)
    {
        $assignment = Assignment::findOrFail($AssignmentID);
        return view('assignments.edit', compact('assignment'));
    }

    public function update(Request $request, $AssignmentID)
    {
        $assignment = Assignment::findOrFail($AssignmentID);
        $request->validate([
            'AssignmentName' => 'required|string|max:255',
            'CourseID' => 'required|integer',
            'DueDate' => 'required|date',
        ]);

        $assignment->update($request->all());

        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully.');
    }

    public function destroy($AssignmentID)
    {
        $assignment = Assignment::findOrFail($AssignmentID);
        $assignment->delete();

        return redirect()->route('assignments.index')->with('success', 'Assignment deleted successfully.');
    }

}
