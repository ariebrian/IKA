<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'api\AuthController@login');
    Route::post('signup', 'api\AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'api\AuthController@logout');
        Route::get('user', 'api\AuthController@user');
        Route::get('/mahasiswa', 'api\MahasiswaController@all');
        Route::get('/test2', 'api\MahasiswaController@index');
        Route::get('/test3', 'api\PekerjaanController@index');
        Route::post('/add_work', 'api\PekerjaanController@store');
        Route::post('/add_mhs', 'api\MahasiswaController@store');
        oute::get('/profile/{id}', 'api\MahasiswaController@show');
        Route::get('/work/{id}', 'api\PekerjaanController@show');
        Route::get('/dosen', 'api\DosenController@all');
        Route::post('/add_dosen', 'api\DosenController@store');
        Route::put('/update/{id}', 'api\MahasiswaController@update');
    });
});

// Route::get('/mahasiswa', 'api\MahasiswaController@all');
Route::get('/test', 'api\MahasiswaController@index');
Route::get('/profile/{id}', 'api\MahasiswaController@show');
Route::get('/work/{id}', 'api\PekerjaanController@show');
Route::get('/dosen', 'api\DosenController@all');
Route::post('/add', 'api\MahasiswaController@store');
Route::post('/add_dosen', 'api\DosenController@store');
Route::put('/update/{id}', 'api\MahasiswaController@update');
