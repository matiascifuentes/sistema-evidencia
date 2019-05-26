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

Auth::routes(['register'=>false]);

Route::get('/admin/home',function(){
	return view('admin.home');
});

//	PROFESOR
Route::group(['namespace' => 'Profesor', 'middleware' => ['authProf'], 'prefix' => 'profesor'], function()
{
	Route::resource('home','HomeProfesorController');

	Route::get('nuevaevidencia', 'HomeProfesorController@nuevaEvidencia')->name('nuevaevidencias');
	Route::post('nuevaevidenciasdd', 'HomeProfesorController@nuevaEvidenciast')->name('nuevaEvidenciast');

	Route::get('evidenciasaprobadas', 'HomeProfesorController@showEvidAprob')->name('muestraAprobadas');
	Route::get('evidenciasnoaprobadas', 'HomeProfesorController@showEvidNoAprob')->name('muestraNoAprobadas');
});

Route::get('/dac/home','Dac\HomeDacController@index')->name('dacHome');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/revisor/home','Revisor\HomeRevisorController@index')->name('revisorHome');
Route::get('/revisor/formularioEvidencia/{id}',[
	'as' => 'formularioEvidencia-show',
	'uses' => 'Revisor\HomeRevisorController@show'
]);