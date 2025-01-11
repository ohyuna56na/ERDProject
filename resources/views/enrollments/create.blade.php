@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Add New Enrollment</h1>

    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="StudentID">Student ID</label>
            <input type="number" name="StudentID" id="StudentID" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="CourseID">Course ID</label>
            <input type="number" name="CourseID" id="CourseID" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="EnrollmentDate">Enrollment Date</label>
            <input type="date" name="EnrollmentDate" id="EnrollmentDate" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
