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
    Route::get('/createposts','AdminController@createposts');
    Route::put('/postscreate','AdminController@store');
    Route::put('/postsupdate/{id}','AdminController@save');
    Route::get('/postedit/{id}/edit','AdminController@postedit');
    Route::get('/userroleedit/{id}','AdminController@userroleedit');
    Route::put('/userroleupdate/{id}','AdminController@userroleupdate');

    Route::delete('/userdelete/{id}','AdminController@userdelete');
    Route::delete('/postdelete/{id}','AdminController@postdelete');


});

Auth::routes();

Route::get('/','IndexController@index');
Route::get('/postsdetails/{id}','IndexController@postsdetails');
Route::get('/register-new', function () {
    return view('newregister');
});
Route::get('/login-new', function () {
    return view('newlogin');
});

