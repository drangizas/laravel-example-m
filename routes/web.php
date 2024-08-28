<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/lt');
});

// In here there's possibility to defined to locale from the domain, so it wouldn't be necessary to 
// have these two groups of the same routes with different locales.
Route::group(['prefix' => 'lt', 'middleware' => 'set-locale:lt'], function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/contact', [ContactsController::class, 'index']);
});

Route::group(['prefix' => 'en', 'middleware' => 'set-locale:en'], function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/contact', [ContactsController::class, 'index']);
});
