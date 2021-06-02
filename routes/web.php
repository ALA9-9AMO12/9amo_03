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

Route::get('/', 'WelcomeController@index');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/berichten', 'WelcomeController@bericht');
Route::get('/cursus', 'WelcomeController@cursus');
Route::get('/info', 'WelcomeController@info');
