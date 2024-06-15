<?php

use App\Http\Controllers\Pokemon\PokemonGenerationScraperController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokemon/generation', PokemonGenerationScraperController::class)
    ->name('pokemon.generation');
