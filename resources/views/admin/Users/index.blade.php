@extends('layouts.app')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
@section('content') 
    <div class="row">
      <section class="content col-md-12">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="pull-left"><h3>Lista Usuarios</h3></div>
              <div class="pull-right">
                <div class="btn-group">
                  <a href="{{ route('users.create') }}" class="btn btn-info" >Añadir Usuario</a>
                </div>
              </div>
              <div class="table-container">
                <table id="mytable" class="table table-bordred table-striped">
                 <thead>
                   <th>ID</th>
                   <th>Nombre</th>
                   <th>Email</th>
                   <th>Editar</th>
                   <th>Eliminar</th>
                 </thead>
                 <tbody>
                  @if($users->count())  
                  @foreach($users as $user)  
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    
                    <td><a class="btn btn-primary btn-xs" href="{{action('Admin\UsersController@edit', $user->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td>
                      <form action="{{action('Admin\UsersController@destroy', $user->id)}}" method="post">
                       {{csrf_field()}}
                       <input name="_method" type="hidden" value="DELETE">
     
                       <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                     </td>
                   </tr>
                   @endforeach 
                   @else
                   <tr>
                    <td colspan="8">No hay registro !!</td>
                  </tr>
                  @endif
                </tbody>
     
              </table>
            </div>
          </div>
          {{ $users->links() }}
        </div>
      </div>
    </section>
  </div>

<style type="text/css">
.table {
    border-top: 2px solid #ccc;
 
  }
</style>
   
@endsection