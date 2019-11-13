<?php

Auth::routes();

Route::get('/', function () {
    return view('start');
});

Route::get('/home', 'HomeController@index')->name('home');
