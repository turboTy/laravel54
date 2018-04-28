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

Route::get("test", function() {
	return "hello world";
});

//主页
Route::get("posts", 'PostController@index');

//列表页
Route::any("posts/listArticle", 'PostController@listArticle');

//文章页
Route::any("posts/showArticle/{id}", 'PostController@showArticle')->where("id","[0-9]+");

