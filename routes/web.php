<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return view('admin.index');
    });

});
