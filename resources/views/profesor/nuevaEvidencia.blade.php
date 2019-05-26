@extends('layouts.app')

@section('content')

<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 containerblue text-center">
				<span>Formulario</span>
			</div>
		</div>
    <div class="row justify-content-center">
    	<div class="col-md-8 paddingesp">
    		<div class="card formulcard">
      		<div class="card-header">Generar formulario #1231</div>
    		<div class="card-body">
    			@if(count($errors) > 0)
					{{dd($errors)}}
    			@endif
    			<form method="POST" action="{{ route('nuevaEvidenciast') }}">
    				@csrf
    				<div class="form-group">
    					<label for="formGroupExampleInput">Profesor</label>
    					<input class="form-control" id="disabledInput" type="text" placeholder="{{ Auth::user()->name }}" name="evid_prof" disabled>
    				</div>
    				<div class="form-group">
					    <label for="formGroupExampleInput">Carrera</label>
					    <input type="text" class="form-control" id="formGroupExamplecarrera" placeholder="Example input" name="codigo_car">
					</div>
    				<div class="form-group">
					    <label for="formGroupExampleInput">Titulo</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" name="titulo">
					</div>
					
					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Descripción</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"></textarea>
					</div>


					<div class="form-group">
						<label for="exampleFormControlTextarea1">Alcance</label>
					    <select class="form-control" name="alcance_id">
							<option value="1">Comunal</option>
							<option value="2">Provincial</option>
							<option value="3">Regional</option>
							<option value="4">Nacional</option>
							<option value="5">Internacional</option>
							<option value=""></option>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Ambito</label>
					    <select class="form-control" name="ambito_id">
							<option value="1">Académico</option>
							<option value="2">Extensión</option>
							<option value="3">Extensión Académica</option>
							<option value="4">Gestión</option>
							<option value="5">Investigación</option>
							<option value="6">Productivo</option>
							<option value="7">Social</option>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Tipo</label>
					    <select class="form-control" name="tipo_id">
							<option value="1">Acuerdos</option>
							<option value="2">Apoyo</option>
							<option value="3">Asesoría</option>
							<option value="4">Asistencia</option>
							<option value="5">Beca</option>
							<option value="6">Campaña</option>
							<option value="7">Capacitación</option>
							<option value="8">Charla</option>
							<option value="9">Conferencia</option>
							<option value="10">Congreso</option>
							<option value="11">Contrato</option>
							<option value="12">Convenio</option>
							<option value="13">Cursos</option>
							<option value="14">Difusión</option>
							<option value="15">Encuentro</option>
							<option value="16">Exposición</option>
							<option value="17">Inducción</option>
						</select>
					</div>
					
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Cantidad de personas afectadas</label>
						<div class="alert alert-dark" role="alert">
							<div class="alert alert-light text-center" role="alert">
								Interior
							</div>
							<div class="form-row">
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Estudiantes</label>
				  						<input type="number" min="0" max="99999" value="0" name="int_estudiantes">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" min="0" max="99999" value="0" name="int_profesores">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Autoridades</label>
				  						<input type="number" min="0" max="99999" value="0" name="int_autoridades">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesionales</label>
				  						<input type="number" min="0" max="99999" value="0" name="int_profesionales">
									</div>
								</div>
							</div>
							<div class="alert alert-light text-center" role="alert">
								Exterior
							</div>
							<div class="form-row">
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Estudiantes</label>
				  						<input type="number"  min="0" max="99999" value="0" name="ext_estudiantes">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" min="0" max="99999" value="0" name="ext_profesores">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Autoridades</label>
				  						<input type="number"  min="0" max="99999" value="0" name="ext_autoridades">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesionales</label>
				  						<input type="number"  min="0" max="99999" value="0" name="ext_profesionales">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
					  	<label for="example-date-input">Fecha realización</label>
					    <input class="form-control" type="date" value="26/05/2019" id="example-date-input" name="fecha_realizacion">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
    			</div>
			</div>
    	</div>
    </div>   
</div>

@endsection