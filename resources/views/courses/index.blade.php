@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <!-- Title -->
    <h1 class="mb-4 text-center">Course List</h1>

    <!-- Add Course Button -->
    <div class="text-center mt-4">
        <a href="{{ route('courses.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Course
        </a>
    </div>

    <!-- Table -->
    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->CourseName }}</td>
                        <td>{{ $course->CourseDescription }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('courses.edit', $course->CourseID) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('courses.destroy', $course->CourseID) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
