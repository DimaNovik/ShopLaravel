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
    return view('layout/main');
});

Route::get('/categories/{id}', [
    'uses' => 'CategoriesController@categoriesAction'
]);

Route::get('categories/goods/{id}',[
    'uses' => 'GoodsController@showAction'
]);

Route::get('categories/goods/order/{id}',[
    'uses' => 'OrdersController@buyAction'
]);

