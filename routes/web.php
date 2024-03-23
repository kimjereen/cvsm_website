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
    Route::get('/news-and-events/read-news', [NavigationController::class, 'readNews'])->name('readnews');
    Route::get('/news-and-events/read-event', [NavigationController::class, 'readEvent'])->name('readevent');
Route::get('/facilities-and-resources', [NavigationController::class, 'facilities'])->name('facilities');
    Route::get('/facilities-and-resources/online-resources/e-histology', [NavigationController::class, 'histology'])->name('histology');
Route::get('/extension', [NavigationController::class, 'extension'])->name('extension');
Route::get('/contact-us', [NavigationController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [NavigationController::class, 'privacyPolicy'])->name('privacypolicy');
Route::get('/admin-login', [NavigationController::class, 'login'])->name('login');



Route::get('/facilities-and-resources/online-resources/e-histology/mammals', [NavigationController::class, 'mammals'])->name('mammals');
    Route::get('/facilities-and-resources/online-resources/e-histology/mammals/goat', [NavigationController::class, 'goat'])->name('goat');
    Route::get('/facilities-and-resources/online-resources/e-histology/mammals/dog', [NavigationController::class, 'dog'])->name('dog');
    Route::get('/facilities-and-resources/online-resources/e-histology/mammals/cat', [NavigationController::class, 'cat'])->name('cat');
    Route::get('/facilities-and-resources/online-resources/e-histology/mammals/cattle', [NavigationController::class, 'cattle'])->name('cattle');
    Route::get('/facilities-and-resources/online-resources/e-histology/mammals/horse', [NavigationController::class, 'horse'])->name('horse');
    Route::get('/facilities-and-resources/online-resources/e-histology/mammals/pig', [NavigationController::class, 'pig'])->name('pig');
    Route::get('/facilities-and-resources/online-resources/e-histology/mammals/other-mammals', [NavigationController::class, 'otherMammals'])->name('othermammals');

Route::get('/facilities-and-resources/online-resources/e-histology/avian', [NavigationController::class, 'avian'])->name('avian');
    Route::get('/facilities-and-resources/online-resources/e-histology/avian/chicken', [NavigationController::class, 'chicken'])->name('chicken');
    Route::get('/facilities-and-resources/online-resources/e-histology/avian/duck', [NavigationController::class, 'duck'])->name('duck');
    Route::get('/facilities-and-resources/online-resources/e-histology/avian/other-avians', [NavigationController::class, 'otherAvians'])->name('otheravians');