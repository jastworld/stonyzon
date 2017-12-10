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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'Welcome@index')->name('store');
//Route::get('/item','Welcome@item')->name('item');
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home','HomeController@index')->name('home');
Route::get('/electronic','TypeController@electronic')->name('electronic');
Route::get('/furniture','TypeController@furniture')->name('furniture');
Route::get('/clothing','TypeController@clothing')->name('clothing');
Route::get('/food','TypeController@food')->name('food');
Route::resource('/item','TypeController');
Route::resource('cart','ShoppingCartController');
Route::post('/cartId/{request}','ShoppingCartController@store');
Route::get('employee/home','EmployeeController@index');


Route::get('employee','Employee\LoginController@showLoginForm')->name('employee.login');
Route::post('employee','Employee\LoginController@login');
Route::post('employee-password/email','Employee\ForgotPasswordController@sendResetLinkEmail')->name('employee.password.email');
Route::get('employee-password/reset','Employee\ForgotPasswordController@showLinkRequestForm')->name('employee.password.request');
Route::post('employee-password/reset','Employee\ResetPasswordController@reset');
Route::get('employee-password/reset/{token}','Employee\ResetPasswordController@showResetForm')->name('employee.password.reset');


Route::resource('employee/item','ItemController')->middleware('auth:employee');
Route::get('employee/item','ItemController@index')->middleware('auth:employee')->name('addItem');
Route::get('employee/viewall','ItemController@showAll')->middleware('auth:employee')->name('viewAll');