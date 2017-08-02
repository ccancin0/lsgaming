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
Route::get('/forums', 'PagesController@showForums')->name('forums');
Route::get('/forums/announcements', 'PagesController@showAnnouncements')->name('announcements');
Route::get('/forums/announcements/create', 'PagesController@showCreateThread')->name('create');
Route::post('/forums/announcements/create', 'PagesController@createThread')->name('create');
Route::put('/forums/announcements/{id}/edit', 'PagesController@updateThread')->name('update');
Route::get('/forums/announcements/{id}', 'PagesController@showThread')->name('show');
Route::get('/forums/announcements/{id}/edit', 'PagesController@editThread')->name('edit');
Route::delete('/forums/announcements/{id}/edit', 'PagesController@destroyThread')->name('destroy');
// Route::get('/signup', 'PagesController@signUp');
// Route::post('/signup', 'UserController@signUp');
// Route::post('/login', 'UserController@logIn');
// Route::resource('user', 'UserController');
// Route::get('/logout', 'UserController@logOut');
Auth::routes();
// Route::resource('posts', 'PostsController');

// Route::get('/home', 'HomeController@index')->name('home');
