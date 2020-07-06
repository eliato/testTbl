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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacts/create', 'ContactsController@create')->name('create'); //form de registro
Route::post('/contacts', 'ContactsController@store'); //envio post del form
Route::delete('/contacts/{contact}', 'ContactsController@destroy');