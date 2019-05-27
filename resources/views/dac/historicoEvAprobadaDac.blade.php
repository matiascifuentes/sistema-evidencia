@extends('layouts.app')

@section('content')

<nav aria-label="breadcrumbpers">
  <ol class="breadcrumbpers">
    <li class="breadcrumbpers-item"><a class="white-text" href="#">Home</a></li>
    <li class="breadcrumbpers-item"><a class="white-text" href="#">Library</a></li>
    <li class="breadcrumbpers-item active" aria-current="page">Evidencias | aprobadas</li>
  </ol>
</nav>


<nav aria-label="">
  <ol class="breadcrumbpers2">
    <li class="breadcrumbpers2-item"><a class="white-text2" href="#">Home</a></li>
    <li class="breadcrumbpers2-item"><a class="white-text2" href="#">Library</a></li>
    <li class="breadcrumbpers2-item"><a class="white-text2" href="#">Home</a></li>
    <li class="breadcrumbpers2-item"><a class="white-text2" href="#">Library</a></li>
    <li class="breadcrumbpers2-item active" aria-current="page">Evidencias | aprobadas</li>
    <li class="breadcrumbpers2-item active" aria-current="page">Evidencias | aprobadas</li>
  </ol>
</nav>



<ul id="breadcrumbs-one">
    <li><a href="home">Home</a></li>
    <li><a href="" class="current">Evidencias | aprobadas</a></li>
</ul>


<div class="container">
    <div class="section-content-title" style="max-width: 970px; margin: auto;">
        <h3 class="text-left">Historico evidencias aprobadas</h3>
    </div>

    <div class="section-content-share">
        <div class="share-box">
            <a href="http://portal.ucm.cl/admision/matricula-carreras-pregrado-2018" class="share facebook"><i class="fa fa-facebook"></i></a>
            <a href="http://portal.ucm.cl/admision/matricula-carreras-pregrado-2018" data-text="Matrícula de Carreras de Pregrado 2018" class="share twitter"><i class="fa fa-twitter"></i></a>
        </div>
    </div>
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
                <a class="btn btn-success btn-block" href="{{route('formularioEvidencia-show',$evidencia->id)}}">Revisar formulario</a>
            </div>
        </div>
        @endforeach
        @else
            <div class="alert alert-info">
                <strong>¡No hay evidencias!</strong> En este momento no hay evidencias aprobadas.
            </div>
        @endif
    </div> 
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 containerblue text-center">
                <span>Formulario</span>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8 paddingesp">
                <table  class="table table-striped">
                    <thead>
                        <tr>
                            <td>Rut</td>
                            <td>Fecha realización</td>
                            <td>Profesor</td>
                            <td>Carrera</td>
                            <td>Titulo</td>
                            <td>Revisar</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if($evidencias->count())
                            @foreach($evidencias as $evidencia)
                                <tr>
                                    <td>{{$evidencia->run}}</td>
                                    <td>{{$evidencia->fecha_realizacion}}</td>
                                    <td>{{$evidencia->nombre1}} {{$evidencia->nombre2}} {{$evidencia->apellido1}} {{$evidencia->apellido2}}</td>
                                    <td>{{$evidencia->nombre_car}}</td>
                                    <td>{{$evidencia->titulo}}</td>
                                    <td>R</td>
                                </tr>
                            @endforeach
                        @else
                            <div class="alert alert-info">
                                <strong>¡No hay evidencias!</strong> En este momento no hay evidencias aprobadas.
                            </div>
                        @endif
                     </tbody>
                </table>
            </div>
        </div>
</div>

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 containerblue text-center">
                <span>Formulario</span>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8 paddingesp ">
            <div id="pricing-table" class="clear row">
                     @foreach($evidencias as $evidencia)
                    <div class="plan">
                        <h3>EVID-{{$evidencia->id}}-{{$evidencia->codigo_car}}<span>Foto</span></h3>
                        <a class="signup" href="">Ver Evidencia</a>         
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