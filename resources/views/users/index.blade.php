@extends('layouts.useradmin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            View All Users
        </h1>
    </div>
    <div class="row">
        @foreach ($users as $user)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $user -> name }}</h5>
                        <div class="card-text">{{ $user -> email }}</div>
                        <div class="card-text">{{ $user -> created_at }}</div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('users.trash', $user -> id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection