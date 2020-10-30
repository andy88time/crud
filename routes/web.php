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
Route::post('/login', 'LoginController@login');
Route::get('/', 'LoginController@index');
Route::get('/belajar', 'MahasiswaController@belajar')->name("belajar");
Route::get('/belajar', 'MahasiswaController@belajar')->name("belajar");
Route::get('/getall', 'MahasiswaController@getall');
Route::get('/update', 'MahasiswaController@updatedata');
Route::get('/delete', 'MahasiswaController@deletedata');
Route::match(["GET","POST"], "/lihat", "MahasiswaController@lihat");
Route::view('/withoutcontroller', 'withoutcontroller');
Route::get('/print/{param1}/{param2?}', 'MahasiswaController@printout');

Route::group(['prefix'=>'member'], function(){
    Route::get('/belajar', 'MahasiswaController@belajar');
    Route::get('/getall', 'MahasiswaController@getall');
});

Route::group(['middleware'=>'cekloginmiddleware'], function(){
    Route::get('/view', 'MahasiswaController@index')->middleware('cekloginmiddleware');
    Route::post('/add', 'MahasiswaController@store');
    Route::get('/add', 'MahasiswaController@create');
    Route::get('/logout', 'LoginController@logout');
});


//Route::post('', 'MahasiswaController@store');

