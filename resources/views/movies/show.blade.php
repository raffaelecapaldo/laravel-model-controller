@extends('layouts.general')
@section('title')
{{$movie->title}}
@endsection
@section('bodyclass', 'bg-red')

@section('content')
<div class="container">
<h1 class="text-center pb-3 text-white">@yield('titleshow', 'Movie details')</h1>
</div>
<div class="bg-movie">
<div class="movie-container container-sm">
    <div class="row d-flex  justify-content-center p-6 pt-5">
        <div class="col-6 d-flex justify-content-center align-items-center thumb">
            <img class="img-fluid" src="{{$movie->image}}" alt="{{$movie->title}}">
        </div>
        <div class="col-6 mt-3 info d-flex d-sm-block justify-content-center flex-column text-center text-white">
            <h3>Title</h3>
            <p class="fs-5">{{$movie->title}} </p>
            @if ($movie->title != $movie->original_title)
            <h3>Original title</h3>
            <p class="fs-5">{{$movie->original_title}} </p>
            @endif
            <h3>Nationality</h3>
            <p class="fs-5">{{ucfirst($movie->nationality)}} </p>
            <h3>Release date</h3>
            <p class="fs-5">{{$movie->date}} </p>
            <h3>Rating</h3>
            <div class="stars" style="--rating: {{$movie->vote / 2}}"></div>
        </div>

    </div>

    <div class="back d-flex justify-content-center mt-5">
    <a class="text-center fs-4 fw-bold" href="{{route('movies.index')}}">@yield('backtext', 'Back to our catalogue')</a>
</div>
</div>
</div>

@endsection
