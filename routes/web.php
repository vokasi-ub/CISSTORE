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
Route::get('/', function() {
    return view('welcome');
});

Route::get('barang/{id}', function ($id) {
    return "hello user with id " .$id ;
});

Route::get('dashboard', function () {
    return view('dashboard/index');
});
Route::get('query', 'BarangController@search');
//Route::resource('barang','barangController');
Route::resource('barang','BarangController')->except(['delete','destroy']) ;
Route::post('/databarang/update','BarangController@update');
Route::post('inputdata/store','barangController@store');
Route::get('/hapus/destroy/{id}', 'barangController@destroy');
Route::resource('barang', 'barangController');
Route::get('barangedit/edit/{id}','barangController@edit');

Route::get('query', 'MerkController@search');
//Route::resource('barang','barangController');
Route::resource('merk','MerkController')->except(['delete','destroy']) ;
Route::post('/datamerk/updatemerk','MerkController@update');
Route::post('inputdata/merk','MerkController@store');
Route::get('/hapus/merk/{id_merk}', 'MerkController@destroy');
Route::resource('merk', 'MerkController');
Route::get('merkedit/editmerk/{id_merk}','MerkController@edit');

Route::get('query', 'TypeController@search');
//Route::resource('barang','barangController');
Route::resource('type','TypeController')->except(['delete','destroy']) ;
Route::post('/datatype/updatetype','TypeController@update');
Route::post('inputdata/type','TypeController@store');
Route::get('/hapus/type/{id_type}', 'TypeController@destroy');
Route::resource('type', 'typeController');
Route::get('typeedit/edittype/{id_type}','typeController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

