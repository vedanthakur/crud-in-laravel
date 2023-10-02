@extends('layouts.app')

@section('title')
  Students
@endsection

@section('content')
<div class="col-md-12 text-center">
    <h1 class="mt-4 mb-4">Students List</h1>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</div>
<div class="row">
    @if(count($students) > 0)
    @foreach ($students as $student)
    <div class="col-md-4">
        <div class="card bg-white shadow-lg mb-4 border-radius-10">
            <div class="card-header text-center">
                <h5 class="text-align-center font-size-20 font-weight-bold">{{ $student->student_name }}</h5>
            </div>
            <div class="card-body padding-20">
                <p class="text-align-center font-size-16">Roll no.: {{ $student->roll_no }}</p>
                <p class="text-align-center font-size-16">Class: {{ $student->class }}</p>
                <p class="text-align-center font-size-16">School: {{ $student->school_name }}</p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('edit_student', $student->id) }}" class="btn btn-primary w-50 mr-2">Edit</a>
                  
                    <form action="{{ route('students.destroy', $student->id) }}" method="post" class="flex-shrink-0 w-50 ml-2">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger w-100">
                        <i class="bi bi-trash"></i> Delete
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <h1 class="text-center">List is empty!</h1>
    @endif
</div>
@endsection
