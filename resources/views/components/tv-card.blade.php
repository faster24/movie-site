<div>

    <div class="mt-8">
        <a href="{{ route('series.show' , $popularTv['id'])}}">
            <img src="{{'https://image.tmdb.org/t/p/w500/' . $popularTv['poster_path']}}" alt="not found" class="hover:opacity-75 transition ease-in-out
            duration-150">
        </a>

        <div class="mt-2">
            <a href="{{ route('series.show' , $popularTv['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{ $popularTv['name']}}</a>
            <div class="flex items-center text-gray-400">
                <span class="w-4">
                    <a href="#">
                        <img src="{{asset('img/star.png')}}" alt="">
                    </a>
                </span>
                <span class="ml-1">{{ $popularTv['vote_average']}}</span>
                <span class="mx-2">|</span>
                <span>{{ $popularTv['first_air_date']}}</span>

            </div>
            <div class="text-sm text-gray-400">
               @foreach ($popularTv['genre_ids'] as $genre )
                   {{ $genres->get($genre)}}
               @endforeach
            </div>
        </div>
    </div>

</div>
