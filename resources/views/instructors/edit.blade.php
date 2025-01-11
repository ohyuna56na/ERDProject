@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Edit Instructor</h1>

    <form action="{{ route('instructors.update', $instructor->InstructorID) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="FirstName">First Name</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control" value="{{ $instructor->FirstName }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="LastName">Last Name</label>
            <input type="text" name="LastName" id="LastName" class="form-control" value="{{ $instructor->LastName }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" value="{{ $instructor->Email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
