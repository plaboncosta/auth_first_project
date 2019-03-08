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
    return view('welcome');
});

Route::get('file', 'FileController@index')->name('file.index');
Route::put('file/upload', 'FileController@upload')->name('file.upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/myfile', 'MyFileController@index')->name('myfile.index');
Route::put('/myfile/upload', 'MyFileController@upload')->name('myfile.upload');


Route::get('autocomplete', 'PostController@index')->name('autocomplete');
Route::post('autocomplete/fetch', 'PostController@fetch')->name('autocomplete.fetch');
Route::post('autocomplete/search', 'PostController@search')->name('autocomplete.search');
