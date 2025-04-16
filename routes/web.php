<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('homepage');

Route::get('/sezione-anime', [PublicController::class, 'anime'])->name('anime.page');

Route::get('/sezione-manga', [PublicController::class, 'manga'])->name('manga.page');


Route::get('/anime/generi', [AnimeController::class, 'types'])->name('anime.types');


Route::get('/anime/generi/{type_id}/{type_name?}',[AnimeController::class, 'animeByType'])->name('anime.bytype');

Route::get('/anime/detail/{id}', [AnimeController::class, 'animeDetail'])->name('anime.detail');