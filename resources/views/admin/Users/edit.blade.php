@extends('layouts.app')

@section('content')

<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 containerblue text-center">
				<span>Actualizar Profesor</span>
			</div>
		</div>
    <div class="row justify-content-center">
    	<div class="col-md-8 paddingesp">
    		<div class="card formulcard">
      		<div class="card-header">Ingrese datos a cambiar</div>
    		<div class="card-body">
			    @if ($errors->any())
			      <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			              <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			      </div><br />
			    @endif
    			<form method="POST" action="{{ route('users.update',$user->id) }}">
    				@csrf
    				<div class="form-group">
					    <label for="formGroupExampleInput">Carrera</label>
					    <select class="form-control" name="codigo_car">
							<option value="CCV">Construcción Civil</option>
							<option value="EICI">Ingeniería Ejecución en Computación e Informática</option>
							<option value="ENFC">Enfermería Curicó</option>
							<option value="ENFT">Enfermería Talca</option>
							<option value="ICE">Ingeniería Civil Electrónica</option>
							<option value="ICI">Ingeniería Civil Informática</option>
							<option value="ICO">Ingeniería en Construcción</option>
							<option value="INC">Ingeniería Civil</option>
							<option value="IND">Ingeniería Civil Industrial</option>
							<option value="KIN">Kinesiología</option>
							<option value="PSI">Psicología</option>
						</select>
					</div>
					<div class="form-group">
					    <label for="formGroupExampleInput">Run </label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese Run" name="run" value="{{$profe->run}}">
					</div>
    				<div class="form-group">
					    <label for="formGroupExampleInput">Nombre 1</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese Primer Nombre" name="name1" value="{{$profe->nombre1}}">
					</div>
					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Nombre 2</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese Segundo Nombre" name="name2" value="{{$profe->nombre2}}"></input>
					</div>
					
					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Apellido Paterno</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese Apellido Pat." name="paterno" value="{{$profe->apellido1}}"></input>
					</div>
					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Apellido Materno</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese Apellido Mat." name="materno" value="{{$profe->apellido2}}"></input>
					</div>
					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Email</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" name="email" value="{{$user->name}}"></input>
					</div>
					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Contraseña</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese password" name="pass" value="{{$user->password}}"></input>
					</div>
					<button type="submit" href="{{ route('users.index') }}" class="btn btn-info btn-block">Submit</button>
					<a href="{{ route('users.index') }}" class="btn btn-info btn-block" >Atrás</a>
				</form>
    			</div>
			</div>
    	</div>
    </div>   
</div>

@endsection

