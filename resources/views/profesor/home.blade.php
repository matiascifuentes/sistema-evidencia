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
</div>
<br>

@endsection
