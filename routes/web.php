<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;

Route::get('/', function () {
    return view('frontend.pages.home');
})->name('home');


Route::middleware('admin')->group(function(){

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

});




// login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login-submit',[LoginController::class,'loggedIn'])->name('login.submit');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');

// login