<div class="mt-8">
    <a href="#">
        <img src="{{'http://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="Cover Photo" class="hover:opacity-75 ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="#" class="text-lg mt-2 text-gray-400 hover:text-gray:300">{{$movie['title']}}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <span class="text-yellow-600"><i class="fas fa-star"></i></span>
            <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
            <span class="mx-2">|</span>
            <span>{{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
        </div>
        <div class="text-gray-400 text-sm">
            @foreach($movie['genre_ids'] as $genre)
                {{$genres->get($genre)}}@if(!$loop->last),@endif
            @endforeach
        </div>
    </div>
</div>
