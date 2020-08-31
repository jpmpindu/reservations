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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('artist', 'ArtistController@index');
Route::get('artist/{id}', 'ArtistController@show');
Route::get('type', 'TypeController@index');
Route::get('type/{id}', 'TypeController@show');
Route::get('locality', 'LocalityController@index');
Route::get(' locality/{id}', 'LocalityController@show');
Route::get('role', 'RoleController@index');
Route::get('role/{id}', 'RoleController@show');

