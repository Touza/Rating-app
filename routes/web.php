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

// Route::get('/Home', 'HomeController@index')->name('home');

Route::get('/',[
		'as' => 'mylogin',
		'uses' => 'MyloginController@index',
]);

// Route::get('/Home',[
// 		'as' => 'myhome',
// 		'uses' => 'MyhomeController@home',
// ]);
Route::get('/Home', 'MyhomeController@home')->name('home');


Route::get('/rate/car','CarController@showCars');


Route::get('/rate/phone', 'PhoneController@showPhones');



