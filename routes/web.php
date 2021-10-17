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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'HomeController@logout');

Route::get('/about', 'AboutController@index');
Route::get('/about/ganti/{id}', 'AboutController@ubah');
Route::put('/about/update/{id}','AboutController@update');

Route::get('/contact', 'ContactController@index');
Route::get('/contact/rubah/{id}', 'ContactController@ubah');
Route::put('/contact/update/{id}','ContactController@update');

//Menampilkan data mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');

//Menambahkan data mahasiswa
Route::get('/mahasiswa/create', 'MahasiswaController@tambah');

//Menyimpan data mahasiswa
Route::post('/mahasiswa/save', 'MahasiswaController@simpan');

//Mengubah data mahasiswa
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@ubah');

//Menyimpan data mahasiswa yang diubah
Route::put('/mahasiswa/update/{id}','MahasiswaController@update');

//Menghapus data mahasiswa
Route::get('/mahasiswa/delete/{id}','MahasiswaController@delete');

//Mencari mahasiswa
Route::get('/mahasiswa/search','MahasiswaController@search');

//Menampilkan data dosen
Route::get('/dosen', 'DosenController@index');

//Menambahkan data dosen
Route::get('/dosen/tambah', 'DosenController@tambah');

//Menyimpan data dosen
Route::post('/dosen/save', 'DosenController@simpan');

//Mengubah data dosen
Route::get('/dosen/ubah/{id}', 'DosenController@ubah');

//Menyimpan data dosen yang diubah
Route::put('/dosen/update/{id}','DosenController@update');

//Menghapus data dosen
Route::get('/dosen/hapus/{id}','DosenController@delete');

//Mencari dosen
Route::get('/dosen/search','DosenController@search');
