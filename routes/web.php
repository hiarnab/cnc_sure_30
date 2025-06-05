<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\admin\DashboardController;

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');

Route::get('/dashboard',[DashboardController::class, 'index']);