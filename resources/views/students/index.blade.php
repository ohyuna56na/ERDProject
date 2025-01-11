@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5"> <!-- Title --> <h1 class="mb-4 text-center">Student List</h1>
    <div class="text-center mt-4">
        <a href="{{ route('students.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add Student
        </a>
    </div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->FirstName }}</td> <td>{{ $student->LastName }}</td> <td>{{ $student->Email }}</td>
                    <td>{{ $student->PhoneNumber ?? 'N/A' }}</td> <td> <!-- Edit Button -->
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Edit
                        </a>

                        <!-- Delete Button -->
                        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">
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