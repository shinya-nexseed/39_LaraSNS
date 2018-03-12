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
Route::get('/', 'WelcomeController@index');

Route::get('/greeting', 'WelcomeController@greeting');




















