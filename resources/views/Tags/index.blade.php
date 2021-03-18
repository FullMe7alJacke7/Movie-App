@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <a href="{{ url('tags/create') }}">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                New Tag
            </button>
        </a>
    </div>

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-600 text-lg font-semibold">Tags</h2>
            @forelse( $tags as $tag)
                <div>
                    <a href="{{url("tags/$tag->id")}}" class="text-gray-500 hover:text-white px-3 pt-3 pb-1 focus:outline-none focus:shadow-outline">{{ $tag->name }}</a>
                </div>
            @empty
                <p>No Tags to display!</p>
            @endforelse
        </div>
@endsection
