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

Route::get('/', 'HomeController@index');

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/login', 'AdminController@showLoginForm');
Route::get('/admin/index', 'AdminController@index');

Route::get('/admin/carros', 'CarroController@index')->name('carros');
Route::get('/admin/novo-carro', 'CarroController@createNewCar')->name('novo.carro');
Route::get('/admin/novo-grupo', 'CarroController@createNewGroup')->name('novo.grupo');

Auth::routes();
