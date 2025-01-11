@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Add Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="LastName">Last Name</label>
            <input type="text" name="LastName" id="LastName" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="PhoneNumber">Phone Number</label>
            <input type="text" name="PhoneNumber" id="PhoneNumber" class="form-control">
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Save
            </button>
        </div>
    </form>
</div>
@endsection
