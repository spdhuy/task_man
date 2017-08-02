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

Route::get('/', 'TaskController@index');
Route::get('/add','TaskController@viewAdd');
Route::post('/add','TaskController@addTask');
Route::get('/edit','TaskController@viewEdit');
Route::post('/edit','TaskController@editTask');
Route::get('/delete/id/{id}/name/{name}','TaskController@viewDelete');
Route::post('/delete','TaskController@deleteTask');
