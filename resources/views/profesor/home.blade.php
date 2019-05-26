@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           casas {{ session('status') }}
                        </div>
                    @endif

                    You are logged in PROFESOR!
                </div>
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
@endsection