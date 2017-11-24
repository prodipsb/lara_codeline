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
Route::get('details/{slug}', 'HomeController@film_details')->where('slug', '[\w\d\-\_]+');

// --------------- Administrator Controller ---------------
Route::get('/admin/add_film', 'AdministratorController@index');
Route::post('admin/save_film', 'AdministratorController@save_film');


