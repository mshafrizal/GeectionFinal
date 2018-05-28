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

Route::get('/', 'ProductController@index');

Route::get('/product', function () {
    return view('product');
});
Route::get('/category', function () {
    return view('category');
});

Auth::routes();
Route::get('/daftarBarang', function(){
    return view('menu/insertProduct');
});

Route::resource('product','ProductController',['names' => [
            'store' => 'product.store']]);