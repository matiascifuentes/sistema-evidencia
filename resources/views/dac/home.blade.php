@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="alert alert-info" role="alert">
                    <button class='close' data-dismiss="alert">
                        &times;
                    </button>
                        
                    <strong>Bienvenido Dac</strong>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="col-md-6">
       @if($evidencias->count())
       @foreach($evidencias as $evidencia)
       <div class="shadow-lg mb-4 bg-white card">
            <div class="card-header bg-info">
                <div class="row">
                    <div class="col-md-4 bg-white text-center">{{$evidencia->run}}</div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 bg-white text-center">{{$evidencia->fecha_realizacion}}</div>                  
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">Profesor: </div>
                    <div class="col-md-8">
                        {{$evidencia->nombre1}} {{$evidencia->nombre2}} {{$evidencia->apellido1}} {{$evidencia->apellido2}}
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">Carrera: </div>
                    <div class="col-md-8">{{$evidencia->nombre_car}}</div>
                </div> 
                <div class="row">
                    <div class="col-md-4">Título: </div>
                    <div class="col-md-8">{{$evidencia->titulo}}</div>
                </div>
            </div>
            <div class="card-footer text-center">
                <a class="btn btn-success btn-block" href="{{route('formularioDac-show',$evidencia->id)}}">Revisar formulario</a>
            </div>
        </div>
        @endforeach
        {!!$evidencias->render()!!}
        @else
            <div class="alert alert-info">
                <strong>¡No hay evidencias!</strong> En este momento no hay evidencias pendientes de revisión.
            </div>
        @endif

    </div> 

@endsection
