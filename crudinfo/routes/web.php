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

Route::get('/product/add','productController@createProduct');
Route::post('/product/save','productController@storeProduct');
Route::get('/product/manage','productController@manageProduct');
Route::get('/product/show/{id}','productController@showProduct');
Route::post('/product/update','productController@updateProduct');
Route::get('/product/delete/{id}','productController@deleteProduct');

Route::get('/image', 'ImageController@index');
Route::post('/image/upload', 'ImageController@upload');
