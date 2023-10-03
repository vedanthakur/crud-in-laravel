@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="col-md-12">
      <h1>Edit Profile</h1>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('profiles.update', $profile->id) }}" method="post">
              @csrf
              @method('PUT')

              <input type="hidden" name="profile_id" value="{{ $profile->id }}">

              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $profile->name }}">
                @error('name')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $profile->email }}">
                @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" name="mobile" value="{{ $profile->mobile }}">
                @error('mobile')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" value="{{ $profile->image }}">
                @error('image')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" name="website" id="website" class="form-control" placeholder="Enter URL" value="{{ $profile->website }}">
                @error('website')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control">
                    <option value="{{ ($profile->gender=='male')?'selected':'' }}">Male</option>
                    <option value="{{ ($profile->gender=='female')?'selected':'' }}">Female</option>
                    <option value="{{ ($profile->gender=='other')?'selected':'' }}">Other</option>
                </select>
                @error('gender')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" value="{{ $profile->dob }}">
                @error('dob')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            @if(session('status'))
            <div class="alert slert-success">
                {{ session('status')}}
            </div>
            @endif

              <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection