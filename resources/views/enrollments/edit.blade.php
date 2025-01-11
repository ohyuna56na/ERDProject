@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Edit Enrollment</h1>

    <form action="{{ route('enrollments.update', $enrollment->EnrollmentID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="StudentID">Student ID</label>
            <input type="number" name="StudentID" id="StudentID" class="form-control" value="{{ $enrollment->StudentID }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="CourseID">Course ID</label>
            <input type="number" name="CourseID" id="CourseID" class="form-control" value="{{ $enrollment->CourseID }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="EnrollmentDate">Enrollment Date</label>
            <input type="date" name="EnrollmentDate" id="EnrollmentDate" class="form-control" value="{{ $enrollment->EnrollmentDate }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
