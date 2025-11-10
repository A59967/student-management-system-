@extends('layouts.app')

@section('content')
  <h2>Add Student</h2>

  <form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>First Name</label>
        <input type="text" name="first_name" class="form-control" required>
      </div>
      <div class="form-group col-md-6">
        <label>Last Name</label>
        <input type="text" name="last_name" class="form-control">
      </div>
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control">
      </div>
      <div class="form-group col-md-6">
        <label>Course</label>
        <input type="text" name="course" class="form-control">
      </div>
    </div>

    <button class="btn btn-primary">Save</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
@endsection
