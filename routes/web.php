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
Route::get('artist/{id}', 'ArtistController@show')->name('artist.show');;
Route::get('type', 'TypeController@index');
Route::get('type/{id}', 'TypeController@show');
Route::get('locality', 'LocalityController@index');
Route::get(' locality/{id}', 'LocalityController@show');
Route::get('role', 'RoleController@index');
Route::get('role/{id}', 'RoleController@show');
Route::get('location', 'LocationController@index');
Route::get('location/{id}', 'LocationController@show');
Route::get('show', 'ShowController@index');
Route::get('show/{id}', 'ShowController@show');
Route::get('representation', 'RepresentationController@index');
Route::get('representation/{id}', 'RepresentationController@show');
Route::get('users', 'UsersController@create');
Route::post('users', 'UsersController@store');



