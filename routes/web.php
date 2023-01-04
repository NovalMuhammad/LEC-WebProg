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
    return view('welcome_page');
});

Route::get('/home', function () {
    return view('home_page');
});

Route::get('/front-end', function () {
    return view('front-end_page');
});

Route::get('/back-end', function () {
    return view('back-end_page');
});

// Auth
Route::get('/register', function () {
    return view('auth.register_page');
});

Route::get('/login', function () {
    return view('auth.login_page');
});


// Course
Route::get('/php', function () {
    return view('course.back-end.php_course');
});

Route::get('/sql', function () {
    return view('course.back-end.sql_course');
});

Route::get('/python', function () {
    return view('course.back-end.python_course');
});

Route::get('/c++', function () {
    return view('course.back-end.c++_course');
});
