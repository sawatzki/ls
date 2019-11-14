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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notes', 'NoteController@index')->name('notes.index'); //###1
Route::get('/notes/edit/{id?}', 'NoteController@edit')->name('notes.edit'); //###1
Route::post('/notes/store/{id?}', 'NoteController@store')->name('notes.store'); //###1
Route::get('/notes/{id}', 'NoteController@destroy')->name('notes.destroy'); //###1
