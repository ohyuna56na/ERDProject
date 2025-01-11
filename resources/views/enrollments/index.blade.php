@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <!-- Title -->
    <h1 class="mb-4 text-center">Enrollment List</h1>

    <!-- Add Enrollment Button -->
    <div class="text-center mt-4">
        <a href="{{ route('enrollments.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Enrollment
        </a>
    </div>

    <!-- Table -->
    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Student ID</th>
                    <th>Course ID</th>
                    <th>Enrollment Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enrollments as $enrollment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $enrollment->StudentID }}</td>
                        <td>{{ $enrollment->CourseID }}</td>
                        <td>{{ $enrollment->EnrollmentDate }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('enrollments.edit', $enrollment->EnrollmentID) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('enrollments.destroy', $enrollment->EnrollmentID) }}" method="POST" style="display:inline;">
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
