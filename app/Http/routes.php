<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::group(['middleware'=>['web']], function() {
	Route::resource('articles', 'ArticlesController');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => ['web']], function () {
//     //
// });
