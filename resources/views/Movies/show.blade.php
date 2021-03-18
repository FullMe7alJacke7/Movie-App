@extends('layouts.app')

@section('content')
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{url('https://maxcdn.icons8.com/app/uploads/2019/05/film-poster-graphic-design.jpg')}}"
                 alt="Movie Image" class="w-64 md:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Beauty and the Beast</h2>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 text-gray-400 hover:text-gray:300">Beauty and the Beast</a>
                    <div class="flex flex-wrap items-center text-gray-400 text-sm">
                        <span class="text-yellow-600"><i class="fas fa-star"></i></span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb 20, 2021</span>
                        <span class="mx-2"></span>
                        <span> Action, Thriller, Comedy</span>
                    </div>

                    <p class="text-gray-300 mt-8 ">
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
                        in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat
                        quo voluptas nulla pariatur?"
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            <div>
                                <div class="text-white">Someone</div>
                                <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                            </div>

                            <div class="pl-5">
                                <div class="text-white">Someone else</div>
                                <div class="text-sm text-gray-400">Screenplay</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <a href="https://www.youtube.com/watch?v=OvW_L8sTu5E">
                            <button
                                class="flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                                <i class="fab fa-youtube"></i>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> {{--End Movie Info Section.--}}

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 pt-16">
            <h2 class="text-gray-300 text-4xl font-semibold mb-4">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <a href="#">
                    <img
                        src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?cs=srgb&dl=pexels-pixabay-220453.jpg&fm=jpg"
                        alt="Cover Photo" class="hover:opacity-75 ease-in-out duration-150">
                    <div class="flex mt-1">
                        <div>
                            <div class="text-gray-500">Someone</div>
                            <div class="text-sm text-gray-400">as Character</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <img
                        src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Cover Photo" class="hover:opacity-75 ease-in-out duration-150">
                    <div class="flex mt-1">
                        <div>
                            <div class="text-gray-500">Someone</div>
                            <div class="text-sm text-gray-400">as Character</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <img
                        src="https://images.pexels.com/photos/1024311/pexels-photo-1024311.jpeg?cs=srgb&dl=pexels-mentatdgt-1024311.jpg&fm=jpg"
                        alt="Cover Photo" class="hover:opacity-75 ease-in-out duration-150">
                    <div class="flex mt-1">
                        <div>
                            <div class="text-gray-500">Someone</div>
                            <div class="text-sm text-gray-400">as Character</div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <img
                        src="https://images.pexels.com/photos/3777579/pexels-photo-3777579.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Cover Photo" class="hover:opacity-75 ease-in-out duration-150">
                    <div class="flex mt-1">
                        <div>
                            <div class="text-gray-500">Someone</div>
                            <div class="text-sm text-gray-400">as Character</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
