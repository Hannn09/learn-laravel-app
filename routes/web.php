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


Route::get('/', 'PagesController@Home');
Route::get('/about', 'PagesController@about');
Route::get('/service','PagesController@service');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/students/create', 'MahasiswaController@create');
Route::post('/students', 'MahasiswaController@store');
Route::delete('/students/{std}', 'MahasiswaController@destroy');
Route::get('/students/{std}/edit', 'MahasiswaController@edit');
Route::patch('/students/{student}', 'MahasiswaController@update');