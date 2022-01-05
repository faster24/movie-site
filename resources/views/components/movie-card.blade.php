
    <div class="mt-8">
        <a href="{{ route('movies.show' , $popularMovie['id'])}}">
            <img src="{{'https://image.tmdb.org/t/p/w500/' . $popularMovie['poster_path']}}" alt="" class="hover:opacity-75 transition ease-in-out
            duration-150">
        </a>

        <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray-300">{{ $popularMovie['title']}}</a>
            <div class="flex items-center text-gray-400">
                <span class="w-4">
                    <a href="{{ route('movies.show' , $popularMovie['id'])}}">
                        <img src="{{asset('img/star.png')}}" alt="">
                    </a>
                </span>
                <span class="ml-1">{{ $popularMovie['vote_average']}}</span>
                <span class="mx-2">|</span>
                <span>{{ $popularMovie['release_date']}}</span>

            </div>
            <div class="text-sm text-gray-400">
               @foreach ($popularMovie['genre_ids'] as $genre )
                   {{ $genres->get($genre)}}
               @endforeach
            </div>
        </div>
    </div>
