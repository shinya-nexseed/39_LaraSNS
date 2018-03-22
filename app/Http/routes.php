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

// get method=getと同じ意味
// ('リクエストURI', '対応するコントローラー@対応するメソッド');
Route::get('/', 'FeedsController@index');

Route::get('/greeting', 'WelcomeController@greeting');

Route::get('/contact', 'PagesController@contact');

Route::get('/about', 'PagesController@about');

// feedsリソース
Route::get('/feeds', 'FeedsController@index');
Route::get('/feeds/create', 'FeedsController@create');
Route::post('/feeds', 'FeedsController@store');
Route::get('/feeds/{id}', 'FeedsController@show');
Route::get('/feeds/{id}/edit', 'FeedsController@edit');
Route::patch('/feeds/{id}', 'FeedsController@update');
Route::delete('/feeds/{id}', 'FeedsController@destroy');
// {id} → $id = パラメータの値
// $idをControllerのメソッドで使用可能（引数で渡す）

// patchメソッド
// form側でinputタグを使いnameが_method、valueがPATCHの情報を送信することで偽装できる
// フレームワークの機能のひとつ（RESTfulなURL設計をするために必要なもの）


// My Feeds
Route::get('/my_feeds', 'FeedsController@my_feeds');


Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

Route::get('/auth/register', 'Auth\AuthController@getRegister');
Route::post('/auth/register', 'Auth\AuthController@postRegister');

// いいね！
Route::post('/feeds/like', 'LikesController@like');




















