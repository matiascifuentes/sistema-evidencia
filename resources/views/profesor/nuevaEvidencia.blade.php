@extends('layouts.app')

@section('content')

<div class="container">
	<div class="container text-center">
		<h1>Formulario</h1>
	</div>
    <div class="row justify-content-center">
    	<div class="col-md-8">
    		<div class="card">
      		<div class="card-header">Generar formulario #1231</div>
    		<div class="card-body">
    			<form>
    				<div class="form-group">
    					<label for="formGroupExampleInput">Profesor</label>
    					<input class="form-control" id="disabledInput" type="text" placeholder="{{ Auth::user()->name }}" disabled>
    				</div>
    				<div class="form-group">
					    <label for="formGroupExampleInput">Titulo</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
					</div>
					
					<div class="form-group">
					    <label for="exampleFormControlTextarea1">Descripción</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>


					<div class="form-group">
						<label for="exampleFormControlTextarea1">Alcance</label>
					    <select class="form-control">
							<option>Comunal</option>
							<option>Provincial</option>
							<option>Regional</option>
							<option>Nacional</option>
							<option>Internacional</option>
							<option></option>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Ambito</label>
					    <select class="form-control">
							<option>Académico</option>
							<option>Extensión</option>
							<option>Extensión Académica</option>
							<option>Gestión</option>
							<option>Investigación</option>
							<option>Productivo</option>
							<option>Social</option>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Tipo</label>
					    <select class="form-control">
							<option>Acuerdo</option>
							<option>Asesoría</option>
							<option>Asistencia</option>
							<option>Beca</option>
							<option>Campaña</option>
							<option>Charla</option>
							<option>Convenio</option>
							<option>Congreso</option>
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
										<label for="example-date-input">Profesores</label>
				  						<input type="number" name="quantity" min="1" max="5">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" name="quantity" min="1" max="5">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" name="quantity" min="1" max="5">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" name="quantity" min="1" max="5">
									</div>
								</div>
							</div>
							<div class="alert alert-light text-center" role="alert">
								Exterior
							</div>
							<div class="form-row">
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" name="quantity" min="1" max="5">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" name="quantity" min="1" max="5">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" name="quantity" min="1" max="5">
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<label for="example-date-input">Profesores</label>
				  						<input type="number" name="quantity" min="1" max="5">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
					  	<label for="example-date-input">Fecha realización</label>
					    <input class="form-control" type="date" value="2019-08-19" id="example-date-input">
					</div>

				

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
    			</div>
			</div>
    	</div>
    </div>   
</div>

@endsection