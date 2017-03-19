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
Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Route::get('/', 'PagesController@getIndex');

Route::get('/post', 'PostController@index')->name('post');

Route::get('/post/create', 'PostController@create')->name('post.create');

Route::post('/post', 'PostController@store')->name('post.store');

Route::get('/post/{id}', 'PostController@show');

Route::get('/post/{id}/edit', 'PostController@edit');

Route::put('/post/{id}', 'PostController@update');

Route::delete('/post/{id}', 'PostController@destroy');