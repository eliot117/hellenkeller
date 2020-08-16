<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});

Route::get('/kinder', function () {
    return view('kinder');
});

Route::get('/presscolar', function () {
    return view('presscolar');
});

Route::get('/primaria', function () {
    return view('primaria');
});

Route::get('/secundaria', function () {
    return view('secundaria');
});

//Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home/{id}', 'HomeController@post');

Route::get('admin', 'AdminController@index');

Route::resource('posts', 'PostsController');

Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
