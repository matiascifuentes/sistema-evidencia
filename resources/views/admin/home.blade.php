@extends('layouts.app')

@section('content')
<div class="container-fluid" style="padding-left: 300px;padding-right: 300px;padding-top: 30px;">
        <div class="card bg-warning ">
            <div class="card-body text-center">
                <span ><i class="fa fa-users fa-3x fa-fw"></i></span>
                <a class="btn btn-warning btn-block"style="color:black" href="{{route('users.index')}}"><p class="card-text">Administrar Usuarios</p></a>
            </div>
        </div>


</div>
@endsection
