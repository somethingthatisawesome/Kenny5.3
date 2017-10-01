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
Route::get('/Home', function () {
    return view('home');
});
Route::get('/Product','ProductController@index');
Route::get('/Product/Category/{id}','ProductCategoryController@index');
Route::get('/Product/Detail/{id}','ProductController@detail');
Route::get('/Service','ServiceController@index');
Route::get('/Service/ImgColor','ServiceController@getImageColor');
Route::get('/Project','ProjectController@index');
Route::get('/Location','LocationController@index');
Route::get('/Project/Detail/{id}','ProjectController@detail');
Route::get('/News','NewsController@index');
/* ================== Homepage + Admin Routes ================== */

require __DIR__.'/admin_routes.php';
