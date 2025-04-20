<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/to-do', function () {
    return view('to-do');
});

Route::get('/villa', function () {
    return view('villa');
});

Route::get('/hotel', function () {
    return view('hotel');
});

Route::get('/fligths', function () {
    return view('fligths');

});

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::post('/register', [AuthController::class, 'register'])->name('register');


Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/register', function () {
    return view('register');
});




Route::get('/login', function () {
    return view('login');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');



Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

use App\Http\Controllers\ProfileController;

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update']);
});

use App\Http\Controllers\SearchController;

Route::get('/search', [SearchController::class, 'index'])->name('search');












