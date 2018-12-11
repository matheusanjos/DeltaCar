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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/carros', 'GrupoController@index');

Route::post('/', 'AluguelController@alugarCarro');

Auth::routes();

Route::get('/admin/login', 'AdminController@showLoginForm');
Route::get('/admin/home', 'AdminController@index')->name('admin.home');

Route::get('/admin/carros', 'CarroController@index')->name('carros');

Route::get('/admin/novo-carro', 'CarroController@create')->name('novo.carro');
Route::post('/admin/carros', 'CarroController@store')->name('novo.carro');

Route::get('/admin/novo-grupo', 'GrupoController@create')->name('novo.grupo');
Route::post('/admin/home', 'GrupoController@store')->name('novo.grupo');

Route::get('/usuario/cadastro', 'ClienteController@create');
Route::post('/usuario/cadastro', 'ClienteController@store');
