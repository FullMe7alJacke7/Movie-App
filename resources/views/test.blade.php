@extends('layouts.app')

@section('content')
    @foreach($popularMovies as $movie)
        <div>
            {{--        {{dd($movie)}}--}}
            <p class="text-gray-500">Title: {{$movie['title']}}</p>
            <img src="{{'http://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="">
            <p class="text-gray-500">Description: {{$movie['overview']}}</p>
            <p class="text-gray-500">Release Date: {{$movie['release_date']}}</p>
            <p class="text-gray-500">Average Rating: {{$movie['vote_average']}}</p>
        </div>
    @endforeach
@endsection
