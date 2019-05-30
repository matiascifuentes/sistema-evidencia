@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="alert alert-info" role="alert">
                    <button class='close' data-dismiss="alert">
                        &times;
                    </button>
                        
                    <strong>Bienvenido Profesor</strong>
            </div>
            @if(session()->get('success'))
                <div class="demo" id="demod">
                    <p>¡Tu formulario ha sido enviado con exito!</p> 
                    <button  class="btn btn-light" onclick="addedSuccess2()">Aceptar</button>
                </div>
            @endif
        </div>
    </div>
    <div clAss="card-columns">
        <div class="card bg-light ">
            <div class="card-body text-center" >
                <span ><i class="fa fa-address-card-o fa-5x"></i></span>
                <a class="btn btn-light btn-block"style="color:black" href="{{route('nuevaevidencias')}}"><p class="card-text">Nueva Evidencia</p></a>
            </div>
        </div>
        <div class="card bg-warning ">
            <div class="card-body text-center">
                <span ><i class="fa fa-cog fa-spin fa-5x fa-fw"></i></span>
                <a class="btn btn-warning btn-block"style="color:black" href="{{route('evidenciasC_revisor')}}"><p class="card-text">Evidencias en Revisor</p></a>
            </div>
        </div>
        <div class="card bg-info ">
            <div class="card-body text-center">
                <span ><i class="fa fa-refresh fa-spin fa-5x fa-fw"></i></span>
                <a class="btn btn-info btn-block"style="color:black" href="{{route('evidenciasC_Dac')}}"><p class="card-text">Evidencias en Dac</p></a>
            </div>
        </div>    
    </div>
    <div class="card-columns">
        <div class="card bg-danger ">
            <div class="card-body text-center">
                <span ><i class="fa fa-times fa-5x fa-fw"></i></span>
                <a class="btn btn-danger btn-block"style="color:black" href="{{route('evnoaprobadas')}}"><p class="card-text">Evidencias Rechazadas</p></a>
            </div>
        </div>
        <div class="card bg-success ">
            <div class="card-body text-center">
                <span ><i class="fa fa-check-square-o fa-5x fa-fw"></i></span>
                <a class="btn btn-success btn-block"style="color:black" href="{{route('evaprobadas')}}"><p class="card-text">Evidencias Aprobadas</p></a>
            </div>
        </div>
    </div>
</div>
<br>

@endsection
