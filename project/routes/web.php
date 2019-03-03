<?php

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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group( function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('teacher')->group( function (){
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');
    Route::get('/', 'TeacherController@index')->name('teacher.dashboard');
});


Route::prefix('student')->group( function (){
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('student.login');
    Route::post('/login', 'Auth\LoginController@login')->name('student.login.submit');
    Route::get('/', 'HomeController@index')->name('student.dashboard');
});

