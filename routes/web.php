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

// --------------- User Controller ---------------
Route::get('/user/add_film', 'UserController@check_user_id');
Route::get('/user/login', 'UserController@user_login');
Route::get('/user/registration', 'UserController@user_registration');
Route::post('/user/save_user', 'UserController@save_user');
Route::post('/user/login_check', 'UserController@user_login_checkout');
Route::get('/user/logout', 'UserController@user_logout');

// --------------- Comment Controller ---------------
Route::post('save_comment', 'CommentController@save_comment');
// --------------- Administrator Controller ---------------
Route::get('/admin/add_film', 'AdministratorController@index');
Route::post('admin/save_film', 'AdministratorController@save_film');


