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

Auth::routes();
Route::get('/', 'ViewLoader@loadHomePageView')->name('root');
Route::get('/home', 'ViewLoader@loadHomePageView')->name('home');
Route::get('/about-us', 'ViewLoader@loadAboutUsView')->name('about-us');
Route::get('/contact-us', 'ViewLoader@loadContactUsView')->name('contact-us');
