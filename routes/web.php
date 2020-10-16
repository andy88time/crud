<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MahasiswaController@index');
Route::get('/view/{mahasiswa}', 'MahasiswaController@show');
Route::get('/add', 'MahasiswaController@create');
Route::post('/add', 'MahasiswaController@store');
//Route::post('', 'MahasiswaController@store');



