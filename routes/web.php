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

Route::get('/', function () {
    return view('Auth.login1');
});




//Route::get('/register', 'TeachersController@register');
//Route::get('/register1', 'TeachersController@register1');
//Route::get('register', 'HomeController@index');
//Route::post('registersave', 'HomeController@store');
Route::get('/profile', 'TeachersController@index');
Route::post('/profile', 'TeachersController@store');

Route::get('/changepassword', 'TeachersController@index');

Auth::routes();
//Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');



