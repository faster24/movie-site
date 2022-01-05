<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SerieController extends Controller
{
    public function index()
    {
        $popularTv = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/tv/popular?api_key=be7f9cdb84e9a639e1e846dbff9e4960')
            ->json()['results'];

        $topRatedTv = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/tv/top_rated?api_key=be7f9cdb84e9a639e1e846dbff9e4960')
            ->json()['results'];

        $genreArray = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list?api_key=be7f9cdb84e9a639e1e846dbff9e4960')
            ->json()['genres'];

        $genre = collect($genreArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });

        return view('series.index', [
                                'popularTv' => $popularTv,
                                'genres' => $genre ,
                                'topRatedTv' => $topRatedTv,
                            ] );
    }

    public function show($id)
    {
        $serie = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/tv/'. $id . '?api_key=be7f9cdb84e9a639e1e846dbff9e4960&append_to_response=credits,videos,images')
        ->json();
        return view('series.show' , [ 'serie' => $serie ]);
    }
}
