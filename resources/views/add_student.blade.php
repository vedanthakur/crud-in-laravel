@extends('layouts.app')

@section('title')
  Add Student
@endsection

@section('content')
<div class="col-md-12">
  <h1>Add Student</h1>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="{{ url('store-form') }}" method="post">
          @csrf

          <div class="form-group">
            <label for="school_name">School Name</label>
            <input type="text" class="form-control" name="school_name" placeholder="School Name">
            @error('school_name')
              <div class="alert alert-danger">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="class">Class</label>
            <input type="number" class="form-control" name="class" placeholder="Class">
            @error('class')
              <div class="alert alert-danger">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="student_name">Student Name</label>
            <input type="text" class="form-control" name="student_name" placeholder="Student Name">
            @error('student_name')
              <div class="alert alert-danger">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="roll_no">Roll No</label>
            <input type="number" class="form-control" name="roll_no" placeholder="Roll No">
            @error('roll_no')
              <div class="alert alert-danger">
                {{ $message }}
              </div>
            @enderror
          </div>

          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          <button type="submit" class="btn btn-primary">Insert</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection