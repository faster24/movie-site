<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $popularMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/popular?api_key=be7f9cdb84e9a639e1e846dbff9e4960')
            ->json()['results'];

        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/now_playing?api_key=be7f9cdb84e9a639e1e846dbff9e4960')
            ->json()['results'];

        $genreArray = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/genre/movie/list?api_key=be7f9cdb84e9a639e1e846dbff9e4960')
            ->json()['genres'];

        $genre = collect($genreArray)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
        return view('movies.index', [  'popularMovies' => $popularMovies,
                                'genres' => $genre ,
                                'nowPlayingMovies' => $nowPlayingMovies,

                            ] );
    }

    public function show($id)
    {
        $movie = Http::withToken(config('services.tmdb.token'))->get('https://api.themoviedb.org/3/movie/'. $id . '?api_key=be7f9cdb84e9a639e1e846dbff9e4960&append_to_response=credits,videos,images')
        ->json();
        return view('movies.show' , [ 'movie' => $movie ]);
    }
}
