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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('comments', '\Laravelista\Comments\CommentController@store');
Route::delete('comments/{comment}', '\Laravelista\Comments\CommentController@destroy');
Route::put('comments/{comment}', '\Laravelista\Comments\CommentController@update');
Route::post('comments/{comment}', '\Laravelista\Comments\CommentController@reply');
