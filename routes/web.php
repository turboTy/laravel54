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
//测试
Route::get('query1',"TestsController@query1");
Route::get('query2',"TestsController@query2");

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
Route::any("posts/{post}", 'PostController@showArticle')->where("post","[0-9]+");

//创建文章页面
Route::get("posts/create", 'PostController@create');

//编辑文章
Route::any("posts/{post}/edit", 'PostController@edit')->where("post", "[0-9]+");

//保存创建文章
Route::any("posts/store", 'PostController@store');

//保存修改文章
Route::put("posts/{post}", "PostController@save")->where("post", "[0-9]+");

//删除文章
Route::any("posts/{post}/delete", "PostController@delete")->where(['post'=>'[0-9]+']);

//增加10条测试数据
Route::any("posts/addData", "PostController@addData");

//跳转
Route::any("posts/jump", "PostController@jump");

