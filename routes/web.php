<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;

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
});


//navigation
Route::get('/', [NavigationController::class, 'index'])->name('home');
Route::get('/about-us', [NavigationController::class, 'about'])->name('about');
Route::get('/about-us/departments', [NavigationController::class, 'departments'])->name('departments');
Route::get('/about-us/departments/faculty', [NavigationController::class, 'faculty'])->name('faculty');
Route::get('/academic-programs', [NavigationController::class, 'academic'])->name('academic');
Route::get('/research-and-publications', [NavigationController::class, 'research'])->name('research');
Route::get('/news-and-events', [NavigationController::class, 'news'])->name('news');
Route::get('/resource-and-facilities', [NavigationController::class, 'facilities'])->name('facilities');
Route::get('/extension', [NavigationController::class, 'extension'])->name('extension');
Route::get('/contact-us', [NavigationController::class, 'contact'])->name('contact');
