@extends('layouts.admin');
@section('content')
<div class="row">
    <div class="col">
        <h1 class="display-2">
            View All Musics
        </h1>
    </div>
    <div class="row">
        @foreach ($musics as $music)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $music -> album_cover }}" class="card-img-top" alt="Movie poster">
                    <div class="card-body">
                        <h5 class="card-title">{{ $music -> title }}</h5>
                        <p class="card-text">Album Title: {{ $music -> album_title }}</p>
                        <p class="card-text">Artist: {{ $music -> artist }}</p>
                        <p class="card-text">Genre: {{ $music -> genre }}</p>
                        <p class="card-text">Date: {{ $music -> release_date }}</p>
                        <p class="card-text">Song Length: {{ $music -> length }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('musics.show', $music -> id) }}" class="btn btn-primary">Show</a>
                        <a href="{{ route('musics.edit', $music -> id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('musics.trash', $music -> id) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection