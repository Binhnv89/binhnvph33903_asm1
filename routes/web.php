<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/client', function () {
    return view('client/index');
});
Route::get('/client/post-details', function () {
    return view('client/post-details');
});

Route::get('/client/search-result', function () {
    return view('client/search-result');
});

Route::get('/client/search-not-found', function () {
    return view('client/search-not-found');
});

Route::get('/client/tags', function () {
    return view('client/tags');
});
