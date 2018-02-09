<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//List Articles
Route::get('articles', 'ArticleController@index');
//Get single request
Route::get('article/{id}', 'ArticleController@show');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



