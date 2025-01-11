@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Add New Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="CourseName">Course Name</label>
            <input type="text" name="CourseName" id="CourseName" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="CourseDescription">Course Description</label>
            <textarea name="CourseDescription" id="CourseDescription" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
