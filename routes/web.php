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

Route::get("admin","HomeController@index")->name("dashboard");



Route::get("charts","PagesController@charts")->name("charts");
Route::get("table","PagesController@tables")->name("tables");

Route::get("login","LoginController@getLogin")->name("login");
Route::post("login","LoginController@postLogin")->name("login");

Route::get("register","PagesController@register")->name("register");
Route::get("forgot-password","PagesController@forgotps")->name("forgot-password");
Route::get("404","PagesController@erros404")->name("404");
