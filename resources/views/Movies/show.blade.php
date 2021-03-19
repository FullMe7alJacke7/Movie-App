@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{'http://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"
                 alt="Movie Image" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{$movie['title']}}</h2>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 text-gray-400 hover:text-gray:300">Beauty and the Beast</a>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <span class="text-yellow-600"><i class="fas fa-star"></i></span>
                        <span class="text-yellow-600"><i class="fas fa-star"></i></span>
                        <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
                        <span class="mx-2">|</span>
                        <span class="mx-2">{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
                        <span>
                            @foreach($movie['genres'] as $genre)
                                {{$genre['name']}}@if(!$loop->last),@endif
                            @endforeach
                        </span>
                    </div>

                    <p class="text-gray-300 mt-8 ">{{$movie['overview']}}</p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            @foreach($movie['credits']['crew'] as $crew)
                                @if($loop->index < 2)
                                    <div class="mr-8">
                                        <div class="text-white">{{$crew['name']}}</div>
                                        <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                    @if(count($movie['videos']['results']) > 0)
                        <div class="mt-12">
                            <a href="{{'https://youtube.com/watch?v=' . $movie['videos']['results'][0]['key']}}"
                               class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                                <i class="fab fa-youtube"></i>
                                <span class="ml-2">Play Trailer</span>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{--Cast--}}
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 pt-16">
            <h2 class="text-gray-300 text-4xl font-semibold mb-4">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($movie['credits']['cast'] as $cast)
                    @if($loop->index < 5)
                        <div class="mt-8">
                            <a href="#">
                                <img
                                    src="{{'http://image.tmdb.org/t/p/w300/' . $cast['profile_path']}}"
                                    alt="Cover Photo" class="hover:opacity-75 ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2 hover:bg-gray-300">{{$cast['name']}}</a>
                                <div class="text-sm text-gray-400">{{$cast['character']}}</div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    {{--Images--}}
    <div class="movie-images">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($movie['images']['backdrops'] as $image)
                    @if($loop->index < 9)
                        <div class="mt-8">
                            <a href="#">
                                <img
                                    src="{{'http://image.tmdb.org/t/p/w500/' . $image['file_path']}}"
                                    alt="Cover Photo" class="hover:opacity-75 ease-in-out duration-150">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
