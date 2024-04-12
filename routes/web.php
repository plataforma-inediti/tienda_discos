<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LabelController;
use App\Http\Controllers\Admin\ArtistController;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/disquera',LabelController::class)->except(['create','edit']);
    Route::resource('artist.song',ArtistController::class);
});
