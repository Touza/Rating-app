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

Route::get('/ratecar','DynamicDependentCar@showCars');
Route::post('ratecar/fetch', 'DynamicDependentCar@fetch')->name('dynamicdependentcar.fetch');
/*** Record Rating Car in database ***/
Route::post('/record_rate_car', 'DynamicDependentCar@getRate');


Route::get('/ratephone','DynamicDependentPhone@showPhones');
Route::post('ratephone/fetch', 'DynamicDependentPhone@fetch')->name('dynamicdependentphone.fetch');
/*** Record Rating Phone in database ***/
Route::post('/record_rate_phone', 'DynamicDependentPhone@getRate');



// Route::post('/LogAdmin','AdminController@verify');