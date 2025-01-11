@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Edit Course</h1>

    <form action="{{ route('courses.update', $course->CourseID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="CourseName">Course Name</label>
            <input type="text" name="CourseName" id="CourseName" class="form-control" value="{{ $course->CourseName }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="CourseDescription">Course Description</label>
            <textarea name="CourseDescription" id="CourseDescription" class="form-control">{{ $course->CourseDescription }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
