<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::view('/', 'previews.homepage')->name('homepage');
Route::view('/artwork', 'previews.artwork')->name('artwork');
Route::view('/biography', 'previews.biography')->name('biography');
Route::view('/news', 'previews.news')->name('news');
Route::view('/contact', 'previews.contact')->name('contact');

