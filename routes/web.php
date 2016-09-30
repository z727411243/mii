<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 进入后台中间件验证是否账号密码有输入
Route::group(['middleware'=>'adminCheckLogin'],function()
{
    Route::get('/admin',function()
        {
            return view('/admin.index');
        });
    // return view('/admin.index');
});
//验证表单中的数据
Route::post("/adminCheck",'admin\LoginController@checkUser');
//进入后台登录的路由
Route::get('/adminLogin',function()
    {
        return view('admin.login.login');
    });

