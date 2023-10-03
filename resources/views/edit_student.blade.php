@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      <h1>Edit Student</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" method="post">
              @csrf
              @method('PUT')

              <input type="hidden" name="student_id" value="{{ $student->id }}">

              <div class="form-group">
                <label for="school_name">School Name</label>
                <input type="text" class="form-control" name="school_name" value="{{ $student->school_name }}">
              </div>

              <div class="form-group">
                <label for="class">Class</label>
                <input type="number" class="form-control" name="class" value="{{ $student->class }}">
              </div>

              <div class="form-group">
                <label for="student_name">Student Name</label>
                <input type="text" class="form-control" name="student_name" value="{{ $student->student_name }}">
              </div>

              <div class="form-group">
                <label for="roll_no">Roll No</label>
                <input type="number" class="form-control" name="roll_no" value="{{ $student->roll_no }}">
              </div>

              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection