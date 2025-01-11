@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Add New Assignment</h1>

    <form action="{{ route('assignments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="AssignmentName">Assignment Name</label>
            <input type="text" class="form-control" id="AssignmentName" name="AssignmentName" required>
        </div>
        <div class="form-group">
            <label for="CourseID">Course ID</label>
            <input type="number" class="form-control" id="CourseID" name="CourseID" required>
        </div>
        <div class="form-group">
            <label for="DueDate">Due Date</label>
            <input type="date" class="form-control" id="DueDate" name="DueDate" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Save Assignment</button>
    </form>
</div>
@endsection
