<?php

use App\Http\Controllers\ContactsControllerEN;
use App\Http\Controllers\ContactsControllerLT;
use App\Http\Controllers\IndexControllerEN;
use App\Http\Controllers\IndexControllerLT;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/lt');
});

Route::group(['middleware' => 'set-locale:lt', 'prefix' => 'lt'], function () {
    Route::get('/', [IndexControllerLT::class, 'index']);
    Route::get('/contact', [ContactsControllerLT::class, 'index']);
});

Route::group(['middleware' => 'set-locale:en', 'prefix' => 'en'], function () {
    Route::get('/', [IndexControllerEN::class, 'index']);
    Route::get('/contact', [ContactsControllerEN::class, 'index']);
});
