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

Route::group(['prefix' => 'random-string'], function () {
    Route::get('', 'CharacterEncodingController@index');
});

Route::group(['prefix' => 'char-encoding'], function () {
    Route::get('', 'CharacterEncodingController@index');
});

Route::group(['prefix' => 'basexx-endecoder'], function () {
    Route::get('', 'Base64EnDecoderController@index');
});

Route::group(['prefix' => 'source-beautifier'], function () {
    Route::get('', 'SourceBeautifierController@index');
});


Route::group(['prefix' => 'hash-function'], function () {
    Route::get('', 'HashFunctionController@index');
});

Route::get('home', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
