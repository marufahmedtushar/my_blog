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

Route::group(['middleware' => ['auth','user']],function() {
    Route::get('/','IndexController@index');
    Route::get('/home','HomeController@index');
});
Route::group(['middleware' => ['auth','admin']],function() {

    Route::get('/dashboard','AdminController@dashboard');
    Route::get('/users','AdminController@users');
    Route::get('/posts','AdminController@posts');
    Route::get('/userroleedit/{id}','AdminController@userroleedit');
    Route::put('/userroleupdate/{id}','AdminController@userroleupdate');


});

Auth::routes();

Route::get('/','IndexController@index');
