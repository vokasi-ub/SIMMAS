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


Route::get('/', function() {
	return view('auth/login');
});

Route::group(['middleware' => 'auth'], function(){
	//Route::resource('penduduk','pendudukController');
	Route::get('dashboard', function () {
    return view('dashboard/index');
	});
	

	//Route::resource('penduduk','pendudukController');
	Route::get('query', 'pendudukController@search');

	Route::resource('penduduk','PendudukController')->except(['delete','destroy']) ;
	Route::post('/datapenduduk/update','pendudukController@update');

	Route::post('inputdatapenduduk/store','pendudukController@store');
	Route::get('/hapus/penduduk/{id_penduduk}', 'pendudukController@destroy');
	Route::resource('penduduk', 'pendudukController');
	Route::get('pendudukedit/edit/{id_penduduk}','pendudukController@edit');


	//Route::resource('kk','kkController');
	Route::resource('kk','KkController')->except(['delete','destroy']) ;
	Route::post('/datakk/update','kkController@update');

	Route::post('inputdatakk/store','kkController@store');
	Route::get('/hapus/deletekk/{no_kk}', 'kkController@destroy');
	Route::resource('kk', 'kkController');
	Route::get('kkedit/edit/{no_kk}','kkController@edit');


	//Route::resource('kematian','kematianController');
	Route::resource('kematian','KematianController')->except(['delete','destroy']) ;
	Route::post('/datakematian/update','kematianController@update');

	Route::post('inputdatakematian/store','kematianController@store');
	Route::get('/hapus/kematian/{id_kematian}', 'kematianController@destroy');
	Route::resource('kematian', 'kematianController');
	Route::get('kematianedit/edit/{id_kematian}','kematianController@edit');



	//Route::resource('pendatang','pendatangController');
	Route::resource('pendatang','PendatangController')->except(['delete','destroy']) ;
	Route::post('/datapendatang/update','pendatangController@update');

	Route::post('inputdatapendatang/store','pendatangController@store');
	Route::get('/hapus/pendatang/{no_pendatang}', 'pendatangController@destroy');
	Route::resource('pendatang', 'pendatangController');
	Route::get('pendatangedit/edit/{no_pendatang}','pendatangController@edit');




	//Route::resource('kelahiran','kelahiranController');
	Route::resource('kelahiran','KelahiranController')->except(['delete','destroy']) ;
	Route::post('/datakelahiran/update','kelahiranController@update');

	Route::post('inputdatakelahiran/store','kelahiranController@store');
	Route::get('/hapus/kelahiran/{id_kelahiran}', 'kelahiranController@destroy');
	Route::resource('kelahiran', 'kelahiranController');
	Route::get('kelahiranedit/edit/{id_kelahiran}','kelahiranController@edit');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
