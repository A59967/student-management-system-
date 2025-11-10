@extends('layouts.app')

@section('content')
  <h2>Edit Student</h2>

  <form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>First Name</label>
        <input type="text" name="first_name" class="form-control" value="{{ $student->first_name }}" required>
      </div>
      <div class="form-group col-md-6">
        <label>Last Name</label>
        <input type="text" name="last_name" class="form-control" value="{{ $student->last_name }}">
      </div>
    </div>

    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
      </div>
      <div class="form-group col-md-6">
        <label>Course</label>
        <input type="text" name="course" class="form-control" value="{{ $student->course }}">
      </div>
    </div>

    <button class="btn btn-primary">Update</button>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
@endsection
