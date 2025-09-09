<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello, World!';
});

//Route dengan parameter
Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});

// Route dengan parameter opsional
Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Hello, " . $name;
});

// Route dengan nama
Route::get('/profile', function () {
    return "This is the profile page.";
})->name('profile');

// Menggunakan Route bernama untuk pengalihan
Route::get('/redirect-to-profile', function () {
    return redirect()->route('profile');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });

    Route::get('profile', function () {
        return "Admin Profile";
    });
});

Route::get('/dashboard', function () {
    return 'Welcome to your dashboard';
})->middleware('auth');

Route::resource('posts', PostController::class);