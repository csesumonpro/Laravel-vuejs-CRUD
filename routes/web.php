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

Route::post('/save-post','PostController@save_post');
Route::get('/get-product','PostController@get_product');
Route::get('/del-product/{id}','PostController@del_product');
Route::get('/edit-product/{id}','PostController@edit_product');
