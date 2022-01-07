<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;


Route::get('/' , [ MovieController::class , 'index' ])->name('movies.index');
Route::get('/show/{id}' , [ MovieController::class , 'show' ])->name('movies.show');


Route::get('/serie' , [ SerieController::class , 'index' ])->name('series.index');
Route::get('/seire/show/{id}' , [ SerieController::class , 'show' ])->name('series.show');
