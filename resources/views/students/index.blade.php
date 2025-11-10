@extends('layouts.app')

@section('content')
  <h1 class="mb-4">Student Management System</h1>

  <a href="{{ route('students.create') }}" class="btn btn-success mb-3">Add Student</a>

  <div class="card">
    <div class="card-body p-0">
      <table class="table mb-0">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @forelse($students as $student)
            <tr>
              <td>{{ $student->id }}</td>
              <td>{{ $student->full_name }}</td>
              <td style="white-space:break-spaces;">{{ $student->email }}</td>
              <td>{{ $student->phone }}</td>
              <td>{{ $student->course }}</td>
              <td>
                <a href="{{ route('students.show', $student) }}" class="btn btn-sm btn-primary">View</a>
                <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-info">Edit</a>

                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure to delete?');">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-sm btn-danger">Delete</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="6" class="text-center">No students found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
@endsection
