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
Route::get('/','HomeController@index')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//History 
Route::get('/history','HistoryController@history')->middleware('auth');

//Settings
Route::get('/settings','SettingsController@settings')->middleware('auth');

//Sales
Route::get('/sales','SalesController@sale')->middleware('auth');

//Conclusion
Route::get('/conclusion','HomeController@conclusion')->middleware('auth');

//Help
Route::get('/help','HomeController@help')->middleware('auth');

//Users
Route::resource('users','UserController')->middleware('auth');
//User Avatar
Route::get('/profile','UserController@profile')->middleware('auth');
Route::post('/profile','UserController@update_avatar')->middleware('auth');
//Route::get('/users/{{ $user->id }}/edit','UserController@update_avatar')->middleware('auth');