@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card-footer text-center">
        <a class="btn btn-success btn-block" href="{{route('revisorHome')}}">Volver al home</a>
    </div>
    @if($datos->count())
    @foreach($datos as $dato)
    <div class="row">

        <div class="col-md-6">
           <div class="shadow-lg mb-4 bg-white card">
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-md-4 bg-white text-center">{{$dato->run}}</div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 bg-white text-center">{{$dato->fecha_realizacion}}</div>                  
                    </div>
                </div>
                <div class="card-body">
                    <div class="bg-info text-center">Datos del profesor</div>
                    <div class="row">
                        <div class="col-md-4">Profesor: </div>
                        <div class="col-md-8">
                            {{$dato->nombre1}} {{$dato->nombre2}} {{$dato->apellido1}} {{$dato->apellido2}}
                        </div>
                    </div> 
                     <div class="row">
                        <div class="col-md-4">R.U.N: </div>
                        <div class="col-md-8">{{$dato->run}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Carrera: </div>
                        <div class="col-md-8">{{$dato->nombre_car}}</div>
                    </div> 
                    <div class="bg-info text-center">Formulario</div>
                    <div class="row">
                        <div class="col-md-4">Título: </div>
                        <div class="col-md-8">{{$dato->titulo}}</div>
                    </div>
                     <div class="row">
                        <div class="col-md-4">Fecha de realización: </div>
                        <div class="col-md-8">{{$dato->fecha_realizacion}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Fecha de creación: </div>
                        <div class="col-md-8">{{$dato->created_at}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Descripción: </div>
                        <div class="col-md-8">{{$dato->descripcion}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alcance: </div>
                        <div class="col-md-8">{{$dato->alcance}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Ambito: </div>
                        <div class="col-md-8">{{$dato->ambito}}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Tipo: </div>
                        <div class="col-md-8">{{$dato->tipo}}</div>
                    </div>
                   
                    <div class="form-group">
                        <div class="alert alert-dark" role="alert">
                            <div class="alert alert-light text-center" role="alert">
                                Involucrados internos
                            </div>
                                <div class="row">
                                    <label class="col-md-6" >Estudiantes</label>
                                    <label class="col-md-6">{{$dato->int_estudiantes}}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6" >Profesores</label>
                                    <label class="col-md-6">{{$dato->int_profesores}}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6" >Autoridades</label>
                                    <label class="col-md-6">{{$dato->int_autoridades}}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6" >Profesionales</label>
                                    <label class="col-md-6">{{$dato->int_profesionales}}</label>
                                </div>
                            
                            <div class="alert alert-light text-center" role="alert">
                                Involucrados externos
                            </div>
                            <div class="row">
                                    <label class="col-md-6" >Estudiantes</label>
                                    <label class="col-md-6">{{$dato->ext_estudiantes}}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6" >Profesores</label>
                                    <label class="col-md-6">{{$dato->ext_profesores}}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6" >Autoridades</label>
                                    <label class="col-md-6">{{$dato->ext_autoridades}}</label>
                                </div>
                                <div class="row">
                                    <label class="col-md-6" >Profesionales</label>
                                    <label class="col-md-6">{{$dato->ext_profesionales}}</label>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a class="btn btn-success btn-block" href="{{route('aprobarEvidenciaRevisor',$dato->evidencia_id)}}">Enviar a D.A.C.</a>
                    <a class="btn btn-danger btn-block" href="#">Rechazar</a>
                </div>
            </div>
        </div> 
        @if($observaciones->count())

        <div class="col-md-6">
             @foreach($observaciones as $observacion)
           <div class="shadow-lg mb-4 bg-white card">
                <div class="card-header bg-secondary">
                    <div class="row">
                        <div class="col-md-4 bg-white text-center">Nivel: {{$observacion->nivel}}</div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4 bg-white text-center">{{$observacion->created_at}}</div>                  
                    </div>
                </div>
                <div class="card-body">
                    
                    <div class="row">
                        <div class="col-md-4">Observación: </div>
                        <div class="col-md-8">{{$observacion->observacion}}</div>
                    </div> 
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">{{$observacion->name}}</div>
                        <div class="col-md-6 text-right">{{$observacion->email}}</div>
                    </div> 
                </div>
            </div>
            @endforeach
        </div> 
        @else
            <div class="alert alert-info text-center">
                <strong>¡Sin observaciones!</strong> La evidencia no tiene observaciones actualmente.
            </div>
        @endif

    </div>
    @endforeach
    @else
        <div class="alert alert-danger text-center">
            <strong>¡Oops!</strong> La evidencia no existe.
        </div>
    @endif

</div>


@endsection