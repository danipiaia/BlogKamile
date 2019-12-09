<?php


Route::get('/', function () {
	$nome = 'Dani';
    return view('site/welcome', compact('nome'));
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth')->namespace('Admin')->prefix('admin')->group(function(){
	Route::resource('posts', 'AdminPostController');
	Route::resource('videos', 'AdminVideoController');
});

Route::get('/inicio', 'HomeController@index');

Route::get('post/{id}', 'HomeController@post');





