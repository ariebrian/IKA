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
    return view('landing');
});

Auth::routes();

// Route::get('/signin', 'AuthController@login_view')->name('login-view');
// Route::post('/signin', 'AuthController@login')->name('sign-in');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@user')->name('user');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/my_profile/{id}', 'ProfileController@show_profile')->name('my_profile/{id}');
Route::get('/mahasiswa', 'ProfileController@all')->name('mahasiswa');
Route::post('/fill_profile', 'ProfileController@store')->name('fill_profile');

Route::get('/lecturer_profile/{id}', 'ProfileController@dosen_profile')->name('my-profile/{id}');
Route::get('/dosen', 'ProfileController@dosen')->name('dosen');

Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');
Route::get('/forum', 'ForumController@index')->name('forum')->middleware('auth');
