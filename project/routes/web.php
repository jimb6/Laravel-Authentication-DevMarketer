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

Route::get('/', 'Auth\LoginController@showLoginForm');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::prefix('admin')->group( function (){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/profile', 'AdminController@getProfile')->name('admin.profile');
    Route::get('/logout', 'Auth\AdminLoginController@userLogout')->name('admin.logout');

});

Route::prefix('teacher')->group( function (){
    Route::get('/login', 'Auth\TeacherLoginController@showLoginForm')->name('teacher.login');
    Route::post('/login', 'Auth\TeacherLoginController@login')->name('teacher.login.submit');
    Route::get('/', 'TeacherController@index')->name('teacher.dashboard');
    Route::get('/logout', 'Auth\TeacherLoginController@userLogout')->name('teacher.logout');
});


Route::prefix('student')->group( function (){
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('student.login');
    Route::post('/login', 'Auth\LoginController@login')->name('student.login.submit');
    Route::get('/', 'HomeController@index')->name('student.dashboard');
    Route::get('/logout', 'Auth\LoginController@userLogout')->name('student.logout');
});

