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

Route::get('/', 'PagesController@index');
Route::get('/dashboard', 'PagesController@showMyAccount')->name('dashboard');
Route::get('/dashboard/profile', 'PagesController@showMyProfile')->name('profile');
Route::get('/addcredit', 'PagesController@addFunds')->name('addCredit');
// Route::get('/signup', 'PagesController@signUp');
// Route::post('/signup', 'UserController@signUp');
// Route::post('/login', 'UserController@logIn');
// Route::resource('user', 'UserController');
// Route::get('/logout', 'UserController@logOut');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
