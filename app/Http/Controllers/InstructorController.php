<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        $instructors = Instructor::all();
        return view('instructors.index', compact('instructors'));
    }

    public function create()
    {
        return view('instructors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'Email' => 'required|email|unique:instructors,Email',
        ]);

        Instructor::create($request->all());
        return redirect()->route('instructors.index')->with('success', 'Instructor created successfully.');
    }

    public function edit($InstructorID)
    {
        $instructor = Instructor::findOrFail($InstructorID);
        return view('instructors.edit', compact('instructor'));
    }

    public function update(Request $request, $InstructorID)
    {
        $instructor = Instructor::findOrFail($InstructorID);

        $request->validate([
            'FirstName' => 'required|string|max:255',
            'LastName' => 'required|string|max:255',
            'Email' => 'required|email|unique:instructors,Email,' . $InstructorID . ',InstructorID',
        ]);

        $instructor->update($request->all());
        return redirect()->route('instructors.index')->with('success', 'Instructor updated successfully.');
    }

    public function destroy($InstructorID)
    {
        $instructor = Instructor::findOrFail($InstructorID);
        $instructor->delete();
        return redirect()->route('instructors.index')->with('success', 'Instructor deleted successfully.');
    }
}
