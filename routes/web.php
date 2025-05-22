<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
    Route::post('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
});

Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('/profile', function () {
        return view('admin.personal-info');
    })->name('admin.personal-info');

    Route::get('/experiences', function () {
        return view('admin.experience');
    })->name('admin.experience');

    Route::get('/educations', function () {
        return view('admin.education');
    })->name('admin.education');

    Route::get('/projects', function () {
        return view('admin.project');
    })->name('admin.project');

    Route::get('/contacts', function () {
        return view('admin.contact');
    })->name('admin.contact');


    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

});
