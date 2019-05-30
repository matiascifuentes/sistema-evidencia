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
    return view('auth/login');
});
Auth::routes(['register'=>false]);


//	Protección rutas PROFESOR
Route::group(['namespace' => 'Profesor', 'middleware' => ['authProf','auth'], 'prefix' => 'profesor'], function()
{
	Route::get('home','HomeProfesorController@index')->name('profehome');

	Route::get('nuevaevidencia', 'HomeProfesorController@nuevaEvidencia')->name('nuevaevidencias');
	Route::post('nuevaevidenciasdd', 'HomeProfesorController@nuevaEvidenciast')->name('nuevaEvidenciast');


	Route::get('evidenciasaprobadas','EvAprobController@index')->name('evaprobadas');
	Route::get('evidenciasnoaprobadas','EvNoAprobController@index')->name('evnoaprobadas');


	Route::get('evidenciasCursoRevisor', 'HomeProfesorController@EvidenciaRevisor')->name('evidenciasC_revisor');
	Route::get('evidenciasCursoDac', 'HomeProfesorController@EvidenciaDac')->name('evidenciasC_Dac');

	Route::get('form_en_cursor/{id}',[
		'as' => 'cursorevisor-show',
		'uses' => 'HomeProfesorController@showRevisor'
	]);

});


//	Protección rutas REVISOR
Route::group(['namespace' => 'Revisor', 'middleware' => ['authRevisor','auth'], 'prefix' => 'revisor'], function()
{
	Route::get('evidenciasenvdac','EvEnviadasDacController@index')->name('evenviadas');

	Route::get('home','HomeRevisorController@index')->name('revisorHome');

	Route::get('evidenciasaprobadas','HomeRevisorController@getAp')->name('revaprobadas');

	Route::get('evidenciasanoprobadas','HomeRevisorController@getNoAp')->name('revnoaprobadas');
	
	Route::get('formularioEvidencia/{id}',[
		'as' => 'formularioEvidencia-show',
		'uses' => 'HomeRevisorController@show'
	]);
	
	Route::get('evidenciaAprobada/{id}',[
		'as' => 'evidenciaAprobada',
		'uses' => 'HomeRevisorController@showAprobadas'
	]);
	Route::get('/aprobarEvidenciaRevisor/{id}',[
		'as' => 'aprobarEvidenciaRevisor',
		'uses' => 'HomeRevisorController@aprobarEvidenciaRevisor'
	]);
	Route::post('/observacionRevisor/{id}',[
		'as' => 'observacionRevisor',
		'uses' => 'HomeRevisorController@observacionRevisor'
	]);


});

//	Protección rutas DAC
Route::group(['namespace' => 'Dac', 'middleware' => ['authDac','auth'], 'prefix' => 'dac'], function()
{
	Route::get('historicoevaprob','HistoricoEvAprobController@index')->name('haprobados');
	
	Route::get('home','HomeDacController@index')->name('dacHome');
	
	Route::get('formularioDac/{id}',[
		'as' => 'formularioDac-show',
		'uses' => 'HomeDacController@show'
	]);

	Route::get('evidenciaFormulario/{id}',[
		'as' => 'evidenciaHisAprobada',
		'uses' => 'HomeDacController@showHisAprob'
	]);

	Route::get('/aprobarEvidenciaDac/{id}',[
		'as' => 'aprobarEvidenciaDac',
		'uses' => 'HomeDacController@aprobarEvidenciaDac'
	]);
	Route::post('/observacionDac/{id}',[
		'as' => 'observacionDac',
		'uses' => 'HomeDacController@observacionDac'
	]);
});

//	Protección rutas ADMIN
Route::group(['namespace' => 'Admin', 'middleware' => ['authAdmin','auth'], 'prefix' => 'admin'], function()
{
	Route::get('home',function(){
		return view('admin.home');
	});
	Route::resource('users','UsersController');
});



