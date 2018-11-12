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
    if(Auth::check()) {
        return redirect()->route('home');
    }
    
    return view('landing');
});

Auth::routes();

// Route::get('/signin', 'AuthController@login_view')->name('login-view');
// Route::post('/signin', 'AuthController@login')->name('sign-in');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@user')->name('user');

// Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/my_profile/{id}', 'ProfileController@show_profile')->name('mhs-profile/{id}');
Route::get('/mahasiswa', 'ProfileController@all')->name('mahasiswa');
Route::get('/add', 'ProfileController@add')->name('add-profile');
Route::get('/edit/{id}', 'ProfileController@edit')->name('edit-profile/{id}');
Route::post('/fill_profile', 'ProfileController@store')->name('fill_profile');
Route::post('/update_profile', 'ProfileController@update')->name('update_profile');
Route::get('/edit_kerja', 'PekerjaanController@edit')->name('edit-work');
Route::post('/update_kerja', 'PekerjaanController@store')->name('update_work');

Route::get('/lecturer_profile/{id}', 'ProfileController@dosen_profile')->name('my-profile/{id}');
Route::get('/dosen', 'ProfileController@dosen')->name('dosen');

Route::get('/newsfeed', 'NewsfeedController@index')->name('newsfeed');
Route::get('/forum', 'ForumController@index')->name('forum')->middleware('auth');
Route::get('/forum/{id}', 'ForumController@show')->name('forumid')->middleware('auth');
