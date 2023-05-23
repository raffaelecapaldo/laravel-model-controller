@extends('layouts.general')
@section('title', 'Movies')

@section('content')
<div class="container">
    <h1 class="text-center">Movies currently available in the catalog</h1>
    <div class="row show-movies">
        @foreach ($movies as $movie)
            <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12 d-flex justify-content-center mb-3">
                <a href=""><div class="card">
                    <div class="img-card">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title; }}</h5>
                        <div class="card-text">
                            @if ($movie->title != $movie->original_title)
                            <p class="fw-bold">Original title: {{ $movie->original_title }}</p>
                            @endif
                            <p class="m-0">Nationality: {{ ucfirst($movie->nationality) }}</p>
                            <p class="m-0">Release date: {{ $movie->date }}</p>
                            <div class="rating d-flex gap-1">
                            <p class="m-0">Rating: </p>
                            <div class="stars" style="--rating: {{$movie->vote / 2}}"></div>
                        </div>
                        </div>

                    </div>
                </div></a>
            </div>
            @endforeach
    </div>
</div>
@endsection
