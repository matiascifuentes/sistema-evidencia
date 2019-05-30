@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 containerblue text-center">
                <span>HISTORICO EVIDENCIAS APROBADAS </span>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8 paddingesp ">
            <div id="pricing-table" class="clear row">
                     @foreach($evidencias as $evidencia)
                    <div class="plan">
                        <h3>EVID-{{$evidencia->id}}-{{$evidencia->codigo_car}}<span><i class="fa fa-check fa-2x fa-fw"></i></span></h3>
                        <a class="signup" href="{{route('evidenciaHisAprobada',$evidencia->id)}}">Ver Evidencia</a>         
                        <ul>    
                            <li><b>Titulo</b><br>{{$evidencia->titulo}}</li>    
                            <li><b>Run</b><br>{{$evidencia->run}}</li>
                            <li><b>Fecha</b><br> {{$evidencia->fecha_realizacion}}</li>
                            <li><b>Profesor</b><br>{{$evidencia->nombre1}} {{$evidencia->nombre2}} {{$evidencia->apellido1}} {{$evidencia->apellido2}}</li>
                            <li><b>Carrera</b><br>{{$evidencia->nombre_car}}</li>                   
                        </ul> 
                    </div>
                     @endforeach
                </div>
        </div>
    </div>
</div>
@endsection