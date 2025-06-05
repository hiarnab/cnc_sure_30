<?php


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

