@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Edit Student</h1>

    <form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT') 
    <div class="form-group">
        <label for="FirstName">First Name</label>
        <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{ $student->FirstName }}" required>
    </div>
    <div class="form-group">
        <label for="LastName">Last Name</label>
        <input type="text" class="form-control" id="LastName" name="LastName" value="{{ $student->LastName }}" required>
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="Email" name="Email" value="{{ $student->Email }}" required>
    </div>
    <div class="form-group">
        <label for="PhoneNumber">Phone Number</label>
        <input type="text" class="form-control" id="PhoneNumber" name="PhoneNumber" value="{{ $student->PhoneNumber ?? '' }}">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>
</div>
@endsection
