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

Route::get('/','EventController@index')->name('index');
Route::get('/add','EventController@add')->name('add');
Route::post('/add','EventController@addRecord');
Route::get('/viewrecord','EventController@viewrecord')->name('viewrecord');
Route::get('/viewsinglerecord/{id}','EventController@viewsinglerecord');
