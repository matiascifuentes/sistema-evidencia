<?php

namespace App\Http\Controllers\Profesor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\formulario;
use App\Evidencia;


class HomeProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('profesor.home');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    
    return 'Hello World';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function nuevaEvidencia()
    {
        //
        return view('profesor.nuevaEvidencia');
    }

    public function nuevaEvidenciast(Request $request)
    {
        $validatedData=$request->validate([
            'alcance_id' => 'required|numeric',
            'ambito_id' => 'required|numeric',
            'tipo_id' => 'required|numeric',
            'titulo' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'fecha_realizacion' => 'required|date',
            'int_estudiantes' => 'required|numeric',
            'int_profesores' => 'required|numeric',
            'int_autoridades' => 'required|numeric',
            'int_profesionales' => 'required|numeric',
            'ext_estudiantes' => 'required|numeric',
            'ext_profesores' => 'required|numeric',
            'ext_autoridades' => 'required|numeric',
            'ext_profesionales' => 'required|numeric',
            'codigo_car' => 'required',
            ]);

        $formulari = new formulario();
        $formulari->alcance_id = $request->alcance_id;
        $formulari->ambito_id = $request->ambito_id;
        $formulari->tipo_id = $request->tipo_id;
        $formulari->titulo = $request->titulo;
        $formulari->descripcion = $request->descripcion;
        $formulari->fecha_realizacion = $request->fecha_realizacion;
        $formulari->int_estudiantes = $request->int_estudiantes;
        $formulari->int_profesores = $request->int_profesores;
        $formulari->int_autoridades = $request->int_autoridades;
        $formulari->int_profesionales = $request->int_profesionales;
        $formulari->ext_estudiantes = $request->ext_estudiantes ;
        $formulari->ext_profesores = $request->ext_profesores;
        $formulari->ext_autoridades = $request->ext_autoridades;
        $formulari->ext_profesionales = $request->ext_profesionales;
        $formulari->save();

        $evidencia = new Evidencia;
        $evidencia->user_id = Auth::user()->id;
        $evidencia->formulario_id = $formulari->id;
        $evidencia->estado = 'Pendiente';
        $evidencia->nivel = 2;
        $evidencia->folio_id = null;
        $evidencia->codigo_car = $request->codigo_car;
        $evidencia->save();


         return redirect('profesor/home')->with('success', 'Book is successfully saved');
    }

    public function showEvidAprob()
    {
        //
    }
    public function showEvidNoAprob()
    {
        //
    }
}
