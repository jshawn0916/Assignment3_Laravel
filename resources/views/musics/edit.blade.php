@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Update Music
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('musics.update', $music->id) }}" method="POST">
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="form-input mb-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="album_title" class="form-label">Album Title</label>
                        <input type="text" class="form-control" id="album_title"
                            value="{{ $music->album_title }}"name="album_title" aria-describedby="Album Title">
                    </div>
                </div>
            </div>
            <div class="form-input mb-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="title" class="form-label">Song Title</label>
                        <input type="text" class="form-control" id="title" value="{{ $music->title }}"name="title"
                            aria-describedby="Title">
                    </div>
                </div>
            </div>
            <div class="form-input mb-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="artist" class="form-label">Artist</label>
                        <input type="text" class="form-control" id="artist" value="{{ $music->artist }}"name="artist"
                            aria-describedby="Artist">
                    </div>
                </div>
            </div>
            <div class="form-input mb-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="genre" class="form-label">Genre</label>
                        <input type="text" class="form-control" id="genre" value="{{ $music->genre }}"name="genre"
                            aria-describedby="Genre">
                    </div>
                </div>
            </div>
            <div class="form-input mb-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="release_date">Date</label>
                        <div class="input-group date">
                            <input type="date" class="form-control" id="release_date"
                                value="{{ $music->release_date }}"name="release_date">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-input mb-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="length" class="form-label">Song Length</label>
                        <input type="text" class="form-control" id="length" value="{{ $music->length }}"name="length"
                            placeholder="00:00:00" aria-describedby="Song Length">
                    </div>
                </div>
            </div>
            <div class="form-input mb-3">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="album_cover" class="form-label">Album Cover</label>
                        <input type="text" class="form-control" id="album_cover"
                            value="{{ $music->album_cover }}"name="album_cover"
                            placeholder="Enter the url to your album cover here!" aria-describedby="Album_cover">
                    </div>
                </div>
            </div>
            <button name="submit" class="btn btn-primary" type="submit" value="Update Music">Update Music</button>
        </form>
    </div>
@endsection
