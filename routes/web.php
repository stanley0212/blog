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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutme', 'StanleyController@am'); //about me
Route::get('/employmenthistory', 'StanleyController@eh'); //employment history
Route::get('/blog', 'StanleyController@blog');//blog
Route::get('/article/{id}', 'StanleyController@info'); //article
Route::get('/article', 'StanleyController@newpost'); //new post



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
