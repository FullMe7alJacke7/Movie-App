@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @include('movie-card')
                @include('movie-card')
                @include('movie-card')
                @include('movie-card')
                @include('movie-card')
            </div>
        </div>

        <div class="now-playing mt-12">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @include('movie-card')
                @include('movie-card')
                @include('movie-card')
                @include('movie-card')
                @include('movie-card')
            </div>
        </div>
    </div>
@endsection