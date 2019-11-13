<?php

Auth::routes();

Route::get('/', function () {
    return view('start');
});


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/movie', 'MovieController@index')->name('movie.index');
Route::get('/movie/{id}', 'MovieController@show')->name('movie.show');

Route::get('/contact', 'ContactController@index')->name('contact.index');

