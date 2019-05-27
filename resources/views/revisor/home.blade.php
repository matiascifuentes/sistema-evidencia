@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if(Session::has('success'))
            <div class="col-md-12 alert alert-info" role="alert">
                <button class='close' data-dismiss="alert">
                    &times;
                </button>
                {{Session::get('success')}}
            </div>
        @endif
        <div class="col-md-8">
                <div class="alert alert-info" role="alert">
                    <button class='close' data-dismiss="alert">
                        &times;
                    </button>
                        
                    <strong>Bienvenido revisor</strong>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container">

    <h2>Prioridad por</h2>
    <!-- Nav pills -->
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#orden1">Fecha de realización ASC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#orden2">Fecha de realización DESC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#orden3">Fecha de creación ASC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#orden4">Fecha de creación DESC</a>
        </li>
    </ul>

  <!-- Tab panes -->
    <div class="tab-content">
        <div id="orden1" class="container tab-pane active"><br>

            <div class="col-md-6">
               @if($evidencias->count())
               @foreach($evidencias->sortBy('fecha_realizacion') as $evidencia)
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
                {!!$evidencias->render()!!}
                @else
                    <div class="alert alert-info">
                        <strong>¡No hay evidencias!</strong> En este momento no hay evidencias pendientes de revisión.
                    </div>
                @endif
            </div> 
        </div>
        <div id="orden2" class="container tab-pane fade"><br>

            <div class="col-md-6">
               @if($evidencias->count())
               @foreach($evidencias->sortByDesc('fecha_realizacion') as $evidencia)
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
                {!!$evidencias->render()!!}
                @else
                    <div class="alert alert-info">
                        <strong>¡No hay evidencias!</strong> En este momento no hay evidencias pendientes de revisión.
                    </div>
                @endif
            </div>           
        </div>
        <div id="orden3" class="container tab-pane active"><br>

            <div class="col-md-6">
               @if($evidencias->count())
               @foreach($evidencias->sortBy('fecha_creacion') as $evidencia)
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
                {!!$evidencias->render()!!}
                @else
                    <div class="alert alert-info">
                        <strong>¡No hay evidencias!</strong> En este momento no hay evidencias pendientes de revisión.
                    </div>
                @endif
            </div> 
        </div>
        <div id="orden4" class="container tab-pane fade"><br>

            <div class="col-md-6">
               @if($evidencias->count())
               @foreach($evidencias->sortByDesc('fecha_creacion') as $evidencia)
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
                {!!$evidencias->render()!!}
                @else
                    <div class="alert alert-info">
                        <strong>¡No hay evidencias!</strong> En este momento no hay evidencias pendientes de revisión.
                    </div>
                @endif
            </div>           
        </div>
    </div>
</div>

@endsection
