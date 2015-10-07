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
/*构建首页
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
*/
Route::get('/','HomeController@index');
/*禁止随意注册功能
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout  ');
//增加一个中间组件
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
    Route::get('/','AdminHomeController@index');
    //增加资源控制器
    Route::resource('pages', 'PagesController');
    Route::resource('comments', 'CommentsController');
});
//路由转换 这边实现
Route::get('pages/{id}','PagesController@show');
//评论提交
Route::post('comment/store','CommentsController@store');
//css文件
