@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5"> <h1 class="mb-4 text-center">Assignment List</h1> <div class="table-responsive"> <div
    class="text-center mt-4"> <a href="{{ route('assignments.create') }}" class="btn btn-success">
    <i class="fas fa-plus"></i> Add Assignment
    </a>
</div>
<table class="table table-striped table-hover align-middle"> <thead class="table-dark"> <tr> <th>No</th>
    <th>Assignment Name</th>
    <th>Course ID</th>
    <th>Due Date</th>
    <th>Actions</th>
    </tr>
    </thead>
    <tbody> @foreach($assignments as $assignment) <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $assignment->AssignmentName }}</td>
        <td>{{ $assignment->CourseID }}</td>
        <td>{{ $assignment->DueDate }}</td>
        <td>
        <a href="{{ route('assignments.edit', $assignment->AssignmentID) }}" class="btn btn-warning btn-sm">
            <i class="fas fa-edit"></i> Edit
        </a>
        <form action="{{ route('assignments.destroy', $assignment->AssignmentID) }}" method="POST" style="display:inline;">
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