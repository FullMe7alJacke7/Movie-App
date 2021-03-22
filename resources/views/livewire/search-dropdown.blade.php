<div class="relative mt-3 md:mt-0" x-data="{ isOpen : true }" @click.away="isOpen = false">
    <input
        wire:model.debounce.500ms="search"
        type="text"
        placeholder="Search"
        class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
        x-ref="search"
        @keydown.window="
        if(event.keyCode === 191){
        event.preventDefault();
        $refs.search.focus();}"
        @focus="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
        @keydown="isOpen = true"
    >
    <div class="absolute top-0">
        <i class="fas fa-search fill-current text-gray-500 mt-2 ml-3"></i>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    <div class="z-50 absolute bg-gray-800 rounded w-64 mt-4"
         x-show.transition.opacity="isOpen"
    >
        @if(strlen($search) >= 2)
            <ul>
                @if(count($searchResults) > 0)
                    @foreach($searchResults as $result)
                        <li class="border-b border-gray-700">
                            <a href="{{route('movies.show', $result)}}"
                               class="block focus:bg-blue-900 hover:bg-gray-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                               @if ($loop->last) @keydown.tab="isOpen = false" @endif>
                                @if ($result['poster_path'])
                                    <img class="w-8" src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" alt="poster">
                                @else
                                    <img class="w-8" src="https://via.placeholder.com/50x75" alt="poster">
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                @else
                    <div class="px-3 py-3">No Results for "{{$search}}"</div>
                @endif
            </ul>
        @endif
    </div>
</div>

