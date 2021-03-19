<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="bg-gray-800 text-sm rounded-full w-64 px-4 pl-8 py-1
                        focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <i class="fas fa-search fill-current text-gray-500 mt-2 ml-3"></i>
    </div>
    <div class="absolute bg-gray-800 rounded w-64 mt-4 ">
        <ul>
            <li class="border-b border-gray-700">
                <a href="" class="block hover:bg-gray-700 px-3 py-3">{{$search}}</a>
            </li>
            <li class="border-b border-gray-700">
                <a href="" class="block hover:bg-gray-700 px-3 py-3">Avengers</a>
            </li>
            <li class="border-b border-gray-700">
                <a href="" class="block hover:bg-gray-700 px-3 py-3">Avengers</a>
            </li>
        </ul>
    </div>
</div>
