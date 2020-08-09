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

Route::get('/', function () {
    return view('user.home');
});
Route::get('/blog', function () {
    return view('user.blog');
});
Route::get('/post', function () {
    return view('user.post');
});
Route::get('/testimonial', function () {
    return view('user.testimonial');
});
Route::get('/service', function () {
    return view('user.service');
});
Route::get('/facilities', function () {
    return view('user.facilities');
});
Route::get('/photo', function () {
    return view('user.photo');
});
Route::get('/academics', function () {
    return view('user.academics');
});
Route::get('/course', function () {
    return view('user.course');
});
Route::get('/location', function () {
    return view('user.location');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

