@extends('layouts.app')

@section('content')
  <h2>Student Details</h2>

  <div class="card">
    <div class="card-body">
      <p><strong>ID:</strong> {{ $student->id }}</p>
      <p><strong>Name:</strong> {{ $student->full_name }}</p>
      <p><strong>Email:</strong> {{ $student->email }}</p>
      <p><strong>Phone:</strong> {{ $student->phone }}</p>
      <p><strong>Course:</strong> {{ $student->course }}</p>
      <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
@endsection
