<?php

Auth::routes();

Route::get('/', function () {
    return view('start');
});

Route::get('lang/{land}', 'LanguageController@switchLang')->name('lang.switch');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/movie', 'MovieController@index')->name('movie.index');
Route::get('/movie/{id}', 'MovieController@show')->name('movie.show');
Route::get('/movie/edit/{id?}', 'MovieController@edit')->name('movie.edit');
Route::post('/movie/store/{id?}', 'MovieController@store')->middleware('auth')->name('movie.store');
Route::get('/movie/destroy/{id}', 'MovieController@destroy')->name('movie.destroy');

Route::get('/contact', 'ContactController@index')->name('contact.index');
