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




Route::get('kategori/{id}', function ($id) {
    return "hello user with id " .$id ;
});


Route::get('dashboard', function () {
    return view('dashboard/index');
});
Route::get('query', 'kategoriController@search');
//Route::resource('kategori','KategoriController');
Route::resource('kategori','KategoriController')->except(['delete','destroy']) ;
Route::post('/datakategori/update','kategoriController@update');

Route::post('inputdata/store','kategoriController@store');
Route::get('/hapus/destroy/{id}', 'kategoriController@destroy');
Route::resource('ketegori', 'kategoriController');
Route::get('kategoriedit/edit/{id}','kategoriController@edit');