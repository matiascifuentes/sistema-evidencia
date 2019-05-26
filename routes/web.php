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
Route::get('/home', 'HomeController@index')->name('home');

//	Protección rutas PROFESOR
Route::group(['namespace' => 'Profesor', 'middleware' => ['authProf','auth'], 'prefix' => 'profesor'], function()
{
	Route::resource('home','HomeProfesorController');

	Route::get('nuevaevidencia', 'HomeProfesorController@nuevaEvidencia')->name('nuevaevidencias');
	Route::post('nuevaevidenciasdd', 'HomeProfesorController@nuevaEvidenciast')->name('nuevaEvidenciast');

	Route::get('evidenciasaprobadas', 'HomeProfesorController@showEvidAprob')->name('muestraAprobadas');
	Route::get('evidenciasnoaprobadas', 'HomeProfesorController@showEvidNoAprob')->name('muestraNoAprobadas');
});


//	Protección rutas REVISOR
Route::group(['namespace' => 'Revisor', 'middleware' => ['authRevisor','auth'], 'prefix' => 'revisor'], function()
{
	Route::get('home','HomeRevisorController@index')->name('revisorHome');
	Route::get('formularioEvidencia/{id}',[
		'as' => 'formularioEvidencia-show',
		'uses' => 'HomeRevisorController@show'
	]);
	Route::get('/aprobarEvidenciaRevisor/{id}',[
		'as' => 'aprobarEvidenciaRevisor',
		'uses' => 'HomeRevisorController@aprobarEvidenciaRevisor'
	]);
});

//	Protección rutas DAC
Route::group(['namespace' => 'Dac', 'middleware' => ['authDac','auth'], 'prefix' => 'dac'], function()
{
	Route::get('home','HomeDacController@index')->name('dacHome');
});

//	Protección rutas ADMIN
Route::group(['namespace' => 'Admin', 'middleware' => ['authAdmin','auth'], 'prefix' => 'admin'], function()
{
	Route::get('home',function(){
		return view('admin.home');
	});
});


