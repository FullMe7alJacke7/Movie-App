@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">

            @if ($movie['poster_path'])
                <img src="{{'http://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}"
                     alt="Movie Image" class="w-64 md:w-96">
            @else
                <img class="w-64 md:w-96" src="https://via.placeholder.com/250x375" alt="poster">
            @endif
            <div class="md:ml-24">
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 text-gray-400 hover:text-gray:300">
                        <h2 class="text-4xl font-semibold">{{$movie['title']}}</h2>
                    </a>
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

                    <div x-data="{isOpen: false}">
                        @if(count($movie['videos']['results']) > 0)
                            <div class="mt-12">
                                <button
                                    @click="isOpen = true"
                                    class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                                    <i class="fab fa-youtube"></i>
                                    <span class="ml-2">Play Trailer</span>
                                </button>
                            </div>


                            {{--Video Modal--}}
                            <div x-show="isOpen"
                                 @keydown.escape.window="isOpen = false">
                                <div style="background-color: rgba(0,0,0,.5)"
                                     x-show.transition.opacity="isOpen"
                                     class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                                >
                                    <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                        <div class="bg-gray-900 rounded">
                                            <div class="flex justify-end pr-4 pt-2">
                                                <button @click="isOpen = false"
                                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                                </button>
                                            </div>
                                            <div class="modal-body px-8 py-8">
                                                <div class="responsive-container overflow-hidden relative"
                                                     style="padding-top: 56.25%">
                                                    <iframe width="560" height="315"
                                                            class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                            style="border: 0;"
                                                            allow="autoplay; encrypted-media"
                                                            src="{{'https://youtube.com/watch?v=' . $movie['videos']['results'][0]['key']}}"
                                                            allowfullscreen></iframe>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
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
    <div class="movie-images" x-data="{ isOpen: false, image: ''}">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach($movie['images']['backdrops'] as $image)
                    @if($loop->index < 9)
                        <div class="mt-8">
                            <a @click.prevent="isOpen = true
                            image='{{'http://image.tmdb.org/t/p/w500/' . $image['file_path']}}'"
                               href="#">
                                <img
                                    src="{{'http://image.tmdb.org/t/p/w500/' . $image['file_path']}}"
                                    alt="Cover Photo" class="hover:opacity-75 ease-in-out duration-150">
                            </a>
                        </div>
                    @endif
                @endforeach

                {{--Image Modal--}}
                <div x-show="isOpen"
                     @keydown.escape.window="isOpen = false">
                    <div style="background-color: rgba(0,0,0,.5)"
                         x-show.transition.opacity="isOpen"
                         class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                    >
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="isOpen = false" class="text-3xl leading-none hover:text-gray-300">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <img :src="image" alt="poster"
                                    class="hover:opacity-75 transition ease-in-out duration-150"
                                    width="100%"
                                    height="auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
