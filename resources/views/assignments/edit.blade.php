@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Edit Assignment</h1>

    <form action="{{ route('assignments.update', $assignment->AssignmentID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="AssignmentName">Assignment Name</label>
            <input type="text" name="AssignmentName" id="AssignmentName" class="form-control" value="{{ $assignment->AssignmentName }}" required>
        </div>
        <div class="form-group">
            <label for="CourseID">Course ID</label>
            <input type="number" name="CourseID" id="CourseID" class="form-control" value="{{ $assignment->CourseID }}" required>
        </div>
        <div class="form-group">
            <label for="DueDate">Due Date</label>
            <input type="date" name="DueDate" id="DueDate" class="form-control" value="{{ $assignment->DueDate }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
