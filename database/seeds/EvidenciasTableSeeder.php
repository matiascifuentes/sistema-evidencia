<?php

use App\Evidencia;
use App\Formulario;
use Illuminate\Database\Seeder;

class EvidenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	/*

    	$formulario = new Formulario;
    	$formulario->titulo = '';
    	$formulario->descripcion = '';
    	$formulario->fecha_realizacion = '';
    	$formulario->alcance_id = ;
    	$formulario->ambito_id = ;
    	$formulario->tipo_id = ;
    	$formulario->int_estudiantes = ;
    	$formulario->ext_estudiantes = ;
    	$formulario->int_profesores = ;
    	$formulario->ext_profesores = ;
    	$formulario->int_autoridades = ;
    	$formulario->ext_autoridades = ;
    	$formulario->int_profesionales = ;
    	$formulario->ext_profesionales = ;
    	$formulario->save();
	
		$evidencia = new Evidencia;
        $evidencia->user_id = 4;	//Es el único profesor creado.
        $evidencia->formulario_id = $formulario->id;
        $evidencia->estado = 'Pendiente';
        $evidencia->nivel = 2;
        $evidencia->folio_id = null;
        $evidencia->codigo_car = '';	
        $evidencia->save();

		*/

        $formulario = new Formulario;
    	$formulario->titulo = 'Formulario 1';
    	$formulario->descripcion = 'descripcion';
    	$formulario->fecha_realizacion = '24/05/2019';
    	$formulario->alcance_id = 1;
    	$formulario->ambito_id = 1;
    	$formulario->tipo_id = 1;
    	$formulario->int_estudiantes = 50;
    	$formulario->ext_estudiantes = 49;
    	$formulario->int_profesores = 54;
    	$formulario->ext_profesores = 5;
    	$formulario->int_autoridades = 35;
    	$formulario->ext_autoridades = 54;
    	$formulario->int_profesionales = 3;
    	$formulario->ext_profesionales = 23;
    	$formulario->save();
	
		$evidencia = new Evidencia;
        $evidencia->user_id = 4;
        $evidencia->formulario_id = $formulario->id;
        $evidencia->estado = 'Pendiente';
        $evidencia->nivel = 2;
        $evidencia->folio_id = null;
        $evidencia->codigo_car = 'ICI';
        $evidencia->save();

    }
}
