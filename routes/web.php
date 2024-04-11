<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/aboutus', 'App\Http\Controllers\AboutUsController@principal')->name('site.aboutus');
Route::get('/home', 'App\Http\Controllers\HomePageController@principal')->name('site.home');
Route::get('/contact', 'App\Http\Controllers\ContactController@principal')->name('site.contact');
Route::get('/news', 'App\Http\Controllers\NewsController@principal')->name('site.news');

require __DIR__.'/auth.php';
