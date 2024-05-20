<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    $links = config('link');
    $comics = config('comics');
    $card = config('card');
    $data = [  
        'link' => $links,
        'comics' => $comics,
        'card' => $card,
    ];
    return view('home', $data);
})->name('home');

Route::get('COMICS', function () {;
    $links = config('link');
    $comics = config('comics');
    $card = config('card');
    $data = [  
        'link' => $links,
        'comics' => $comics,
        'card' => $card,
    ];
    return view('comics', $data );
})->name('comics');

Route::get('card', function () {;
    $links = config('link');
    $comics = config('comics');
    $card = config('card');
    $data = [  
        'link' => $links,
        'comics' => $comics,
        'card' => $card,
    ];
    return view('card', $data );
})->name('card');

