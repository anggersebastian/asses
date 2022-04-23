
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
    return view('welcome');
});

Auth::routes();

Route::get('/karyawan','KaryawanController@index');
Route::get('/karyawan/{id}','KaryawanController@show');
Route::post('/karyawan/store','KaryawanController@store');
Route::post('/karyawan/update/{id}','KaryawanController@update');
Route::post('/karyawan/delete/{id}','KaryawanController@destroy');

Route::resource('staff', 'StaffController');