<?php


Route::get('/', function () {
	$nome = 'Dani';
    return view('site/welcome', compact('nome'));
});

Route::namespace('Admin')->prefix('admin')->group(function(){
	Route::resource('posts', 'AdminPostController');
	Route::resource('videos', 'AdminVideoController');
});




