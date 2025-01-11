@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <!-- Title -->
    <h1 class="mb-4 text-center">Instructor List</h1>

    <!-- Add Instructor Button -->
    <div class="text-center mt-4">
        <a href="{{ route('instructors.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Instructor
        </a>
    </div>

    <!-- Table -->
    <div class="table-responsive mt-4">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($instructors as $instructor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $instructor->FirstName }}</td>
                        <td>{{ $instructor->LastName }}</td>
                        <td>{{ $instructor->Email }}</td>
                        <td>
                            <!-- Edit Button -->
                            <a href="{{ route('instructors.edit', $instructor->InstructorID) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <!-- Delete Button -->
                            <form action="{{ route('instructors.destroy', $instructor->InstructorID) }}" method="POST" style="display:inline;">
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
