@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="mb-4 text-center">Add New Instructor</h1>

    <form action="{{ route('instructors.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="FirstName">First Name</label>
            <input type="text" name="FirstName" id="FirstName" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="LastName">Last Name</label>
            <input type="text" name="LastName" id="LastName" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="Email">Email</label>
            <input type="email" name="Email" id="Email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
