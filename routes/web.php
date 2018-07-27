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


Route::get('/ratecar','DynamicDependentCar@showCars');
Route::post('ratecar/fetch', 'DynamicDependentCar@fetch')->name('dynamicdependentcar.fetch');


Route::get('/ratephone','DynamicDependentPhone@showPhones');
Route::post('ratephone/fetch', 'DynamicDependentPhone@fetch')->name('dynamicdependentphone.fetch');




