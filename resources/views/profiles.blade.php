@extends('layouts.app')

@section('title')
Profile List
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
    <div class="card card-body">
        
    </div>
</div>

@endsection

