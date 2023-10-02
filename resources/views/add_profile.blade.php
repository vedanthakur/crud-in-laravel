@extends('layouts.app')

@section('title')
    Add Profile
@endsection

@section('content')
    <div class="col-md-12">
        <h1>Add Profile</h1>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter name">
                        @error('name')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                        @error('email')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="tel" name="mobile" id="mobile" class="form-control" placeholder="Enter mobile">
                        @error('mobile')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @error('image')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" id="website" class="form-control" placeholder="Enter URL">
                        @error('website')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        @error('gender')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="dob">Date of Birth</label>
                        <input type="date" name="dob" id="dob" class="form-control">
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
                    <button class="btn btn-primary">Add Profile</button>
                </form>
        </div>
        </div>
    </div>
@endsection