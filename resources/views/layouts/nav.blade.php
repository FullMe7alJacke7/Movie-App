<div class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center sm:justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{route('movies.index')}}">
                        <i class="fas fa-video fa-3x"></i>
                        <div class="inline-flex font-bold text-xl">Movie</div>
                        <div class="inline-flex text-xl">App</div>
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{route('movies.index')}}" class="hover:text-gray-400">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{url('tv-shows')}}" class="hover:text-gray-400">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="{{url('actors')}}" class="hover:text-gray-400">Actors</a>
                </li>
            </ul>

            <div class="flex flex-col md:flex-row items-center ml-5">
                <livewire:search-dropdown/>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
{{--                        <img src="/img/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">--}}
                        <i class="fas fa-user fa-3x text-yellow-600"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
