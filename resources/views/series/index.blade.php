@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-tv">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular TV shows
            </h2>

            <div class="grid grid-col-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($popularTv as $serie)
                    <x-tv-card :genres="$genres" :popularTv="$serie" />
                @endforeach


            </div>
        </div>

             <div class="topRatedTv mt-8">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Top Rated Shows
            </h2>

            <div class="grid grid-col-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($topRatedTv as $serie)
                <x-tv-card :genres="$genres" :popularTv="$serie" />
                @endforeach


            </div>
        </div> -->
    </div>
@endsection
