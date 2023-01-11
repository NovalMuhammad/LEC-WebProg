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

// Auth
Route::get('/register', function () {
    return view('auth.register_page');
});

Route::get('/login', function () {
    return view('auth.login_page');
});



Route::get('/home', function () {
    return view('home_page');
});


// Admin

Route::get('/front-end', function () {
    return view('admin.front-end_page');
});

Route::get('/back-end', function () {
    return view('admin.back-end_page');
});

// Course Front-End
Route::get('/html', function () {
    return view('admin.course.front-end.html_course');
});

Route::get('/css', function () {
    return view('admin.course.front-end.css_course');
});

Route::get('/javascript', function () {
    return view('admin.course.front-end.javascript_course');
});

// Course Back-End
Route::get('/php', function () {
    return view('admin.course.back-end.php_course');
});

Route::get('/sql', function () {
    return view('admin.course.back-end.sql_course');
});

Route::get('/python', function () {
    return view('admin.course.back-end.python_course');
});

Route::get('/c++', function () {
    return view('admin.course.back-end.c++_course');
});


// Member
Route::get('/front', function () {
    return view('member.front-end_page');
});

Route::get('/back', function () {
    return view('member.back-end_page');
});


// Course Front-End
// Route::get('/html', function () {
//     return view('member.course.front-end.html_course');
// });

// Route::get('/css', function () {
//     return view('member.course.front-end.css_course');
// });

// Route::get('/javascript', function () {
//     return view('member.course.front-end.javascript_course');
// });

// // Course Back-End
// Route::get('/php', function () {
//     return view('member.course.back-end.php_course');
// });

// Route::get('/sql', function () {
//     return view('member.course.back-end.sql_course');
// });

// Route::get('/python', function () {
//     return view('member.course.back-end.python_course');
// });

// Route::get('/c++', function () {
//     return view('member.course.back-end.c++_course');
// });

