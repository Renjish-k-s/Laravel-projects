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
Route::get('/','FrontEndController@homePage')->name('home');
Route::get('new-user','FrontEndController@create')->name('create.user');

Route::post('save-user','FrontEndController@save')->name('save.user');
// Route::post('delete-user','FrontEndController@delete')->name('delete.user');

Route::get('edit-user/{user_id}','FrontEndController@edit')->name('edit.user');
Route::post('update-user','FrontEndController@update')->name('update.user');

Route::get('delete_user/{user_id}','FrontEndController@delete')->name('delete.user');

