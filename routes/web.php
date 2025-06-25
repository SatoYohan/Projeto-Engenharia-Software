<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game1', function () {
    return view('games/game1');
});

Route::get('/game2', function () {
    return view('games/game2');
});
