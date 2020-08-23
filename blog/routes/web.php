<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use Illuminate\Support\Facades\Input;

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
    Route::put('/comment/{post}','CommentController@commentstore');
});
Route::group(['middleware' => ['auth','admin']],function() {

    Route::get('/dashboard','AdminController@dashboard');

    Route::get('/users','AdminController@users');

    Route::get('/posts','AdminController@posts');
    Route::get('/createposts','AdminController@createposts');
    Route::put('/postscreate','AdminController@store');
    Route::put('/postsupdate/{id}','AdminController@save');
    Route::get('/postedit/{id}/edit','AdminController@postedit');
    Route::get('/postdetails/{id}','AdminController@postdetails');
    Route::delete('/postdelete/{id}','AdminController@postdelete');

    Route::get('/userroleedit/{id}','AdminController@userroleedit');
    Route::put('/userroleupdate/{id}','AdminController@userroleupdate');
    Route::delete('/userdelete/{id}','AdminController@userdelete');


    Route::get('/contact','AdminController@contactlist');
    Route::get('/contactview/{id}','AdminController@contactview');
    Route::delete('/contactdelete/{id}','AdminController@contactdelete');


    Route::get('/comments','AdminController@comments');
    Route::get('/comment/{id}','AdminController@commentview');
    Route::delete('/comentdelete/{id}','AdminController@commentdelete');





});

Auth::routes();

Route::get('/','IndexController@index');
Route::get('/postsdetails/{id}','IndexController@postsdetails');
Route::get('/searchpostdetails/{id}','IndexController@postsdetails');
Route::get('/register-new', function () {
    return view('newregister');
});
Route::get('/login-new', function () {
    return view('newlogin');
});
Route::get('/search','IndexController@search');
Route::post('/contact','IndexController@contact');


