<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about-me', function () {
    return view('about-me');
})->name('about-me');

// Route::get('/blog', function () {
//     return view('blog');
// })->name('blog');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/email', function () {
    return view('layouts.stylist-email');
});

Route::resource('blog', BlogController::class);


Route::get('auth/google', [GoogleAuthController::class,'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class,'callback']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard')->middleware('admin');
});
