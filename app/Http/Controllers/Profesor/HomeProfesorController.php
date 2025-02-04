<?php

namespace App\Http\Controllers\Profesor;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Formulario;
use App\Evidencia;
use App\Observaciones;
use App\Folio;



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

        //

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
    public function showRevisor($id)
    {
        //
        if (is_numeric($id)){
            $id_form = Evidencia::where('id',$id)->select('formulario_id')->first();
            if (empty($id_form))
                $formulario_id = 0;
            else
                $formulario_id = $id_form->formulario_id;
            $datos = Formulario::where('formularios.id',$formulario_id)
                                ->join('ambito','ambito.id','=','formularios.ambito_id')
                                ->join('alcance','alcance.id','=','formularios.alcance_id')
                                ->join('tipo','tipo.id','=','formularios.tipo_id')
                                ->join('evidencias','evidencias.formulario_id','=','formularios.id')
                                ->join('profesor','evidencias.user_id','=','profesor.user_id')
                                ->join('carreras','evidencias.codigo_car','=','carreras.codigo_car')
                                ->select('formularios.*','ambito.nombre as ambito','alcance.nombre as alcance','tipo.nombre as tipo','profesor.*','carreras.nombre_car','evidencias.id as evidencia_id','evidencias.nivel','evidencias.estado')
                                ->get();

            $observaciones = Observaciones::where('evidencia_id',$id)
                                            ->join('users','users.id','=','observaciones.user_id')
                                            ->select('observaciones.*','users.name','users.email')
                                            ->orderBy('observaciones.created_at','desc')
                                            ->get();
            return view('profesor.formularioCurso',["datos"=>$datos,"observaciones"=>$observaciones]);
        }
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

        $foli = new Folio();
        $foli->codigo = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYXZ"),0,5);
        $foli->numero = $formulari->id;
        $foli->save();

        $evidencia = new Evidencia;
        $evidencia->user_id = Auth::user()->id;
        $evidencia->formulario_id = $formulari->id;
        $evidencia->estado = 'Pendiente';
        $evidencia->nivel = 2;
        $evidencia->folio_id = $foli->id;
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
    public function EvidenciaRevisor()
    {
        //
        $evidencias = Evidencia::where('estado','Pendiente')
                                ->where('nivel',2)
                                ->join('profesor','evidencias.user_id','=','profesor.user_id')
                                ->join('formularios','evidencias.formulario_id','=','formularios.id')
                                ->join('carreras','evidencias.codigo_car','=','carreras.codigo_car')
                                ->select('profesor.*','formularios.fecha_realizacion','formularios.titulo','carreras.nombre_car','formularios.id')
                                ->paginate(8);
        return view('profesor.evidenciasCursoRevisor',["evidencias"=>$evidencias]);
    }
    public function EvidenciaDac()
    {
        //
        $evidencias = Evidencia::where('estado','Pendiente')
                                ->where('nivel',3)
                                ->join('profesor','evidencias.user_id','=','profesor.user_id')
                                ->join('formularios','evidencias.formulario_id','=','formularios.id')
                                ->join('carreras','evidencias.codigo_car','=','carreras.codigo_car')
                                ->select('profesor.*','formularios.fecha_realizacion','formularios.titulo','carreras.nombre_car','formularios.id')
                                ->paginate(8);

        return view('profesor.evidenciasCursoDac',["evidencias"=>$evidencias]);
    }
}
