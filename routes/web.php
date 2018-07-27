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
// Route::get('/', function () {
//     return view('welcome');
// });



// Auth::routes();

Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::post('/logout','Auth\LoginController@logout');

Route::get('/Admin','Auth\LoginController@login')->name('admin');
Route::post('/Admin','Auth\LoginController@verify');


Route::get('/Home', 'HomeController@index')->name('home');



// Route::get('/',[
// 		'as' => 'mylogin',
// 		'uses' => 'MyloginController@index',
// ]);

// Route::get('/Home',[
// 		'as' => 'myhome',
// 		'uses' => 'MyhomeController@home',
// ]);
// Route::get('/Home', 'MyhomeController@home')->name('home');

// Route::get('/LogAdmin','AdminController@login')->name('login_admin');

// Route::post('/LogAdmin','AdminController@verify');