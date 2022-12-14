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

//ブログ一覧画面表示
Route::get('/', 'PostController@showList')->name('posts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//ブログ登録画面表示
Route::get('/post/create', 'PostController@showCreate')->name('create');

//ブログ登録
Route::post('/post/store', 'PostController@exeStore')->name('store');
//ブログ詳細画面表示
Route::get('/post/{id}', 'PostController@showDetail')->name('show');

