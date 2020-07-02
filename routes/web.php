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

//Route::get('/', 'HomeController@home');
Route::get('/form', 'AuthController@form');
Route::get('/welcome', 'AuthController@welcome');
Route::post('/welcome', 'AuthController@welcome_post');
Route::get('/', function () {
    return view('adminlte3.index');
});
Route::get('/master', function () {
    return view('adminlte3.master');
});
Route::get('/item', function () {
    return view('items.index');
});
Route::get('/item/create', function () {
    return view('items.create');
});
Route::get('/data-tables', function () {
    return view('items.data-table');
});
