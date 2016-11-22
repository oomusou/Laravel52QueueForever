<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/** 顯示所有文章 */
Route::get('posts/', [
    'as'   => 'posts.index',
    'uses' => 'PostController@index'
]);

/** 顯示所有文章的 title */
Route::get('posts/titles', [
    'as'   => 'posts.titles',
    'uses' => 'PostController@titles'
]);

/** 顯示 id 文章的 title */
Route::get('posts/{id}', [
    'as'   => 'posts.show',
    'uses' => 'PostController@show'
]);


