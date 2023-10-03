@extends('layouts.app')

@section('title')
Profile List
@endsection

@section('content')
<div class="col-md-12 text-center">
    <h1 class="mt-4 mb-4">Profiles List</h1>
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
</div>
<div class="row">
    @if(count($profiles) > 0)
    @foreach ($profiles as $profile)
    <div class="col-md-4">
        <div class="card bg-white shadow-lg mb-4 border-radius-10">
            <div class="card-header text-center">
                <h5 class="text-align-center font-size-20 font-weight-blod">{{ $profile->name }}</h5>
            </div>
            <div class="card-body padding-20">
                <p class="text-align-center font-size-16">Email: {{ $profile->email }}</p>
                <p class="text-align-center font-size-16">Mobile: {{ $profile->mobile }}</p>
                <p class="text-align-center font-size-16">Image:</p>
                <img src="images/{{ $profile->image }}" width="200px" alt="{{ $profile->name }}">
                <p class="text-align-center font-size-16">Website: {{ $profile->website }}</p>
                <p class="text-align-center font-size-16">Gender: {{ $profile->gender }}</p>
                <p class="text-align-center font-size-16">Date of Birth: {{ $profile->dob }}</p>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('edit_profile', $profile->id) }}" class="btn btn-primary w-50 mr-2">Edit</a>
                  
                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="post" class="flex-shrink-0 w-50 ml-2">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger w-100">
                        <i class="bi bi-trash"></i> Delete
                      </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <h1 class="text-center">List is empty</h1>
        @endif
    </div>
</div>

@endsection

