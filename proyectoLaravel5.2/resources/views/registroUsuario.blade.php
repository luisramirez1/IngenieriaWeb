@extends('principal')

@section('encabezado')
	<h2>Registro de Usuarios</h2>
@stop

@section('contenido')
		<form action="{{url('/guardarUsuario')}}" method="POST" class="jumbotron" id="form1">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<section id="seccion1">
					<article class="form-group">
						<label for="Nombre">Nombre:</label>
						<input name="nombre" type="text" class="form-control" placeholder="Nombre" required>
					</article>
					<article class="form-group">
						<label for="Edad">Edad:</label>
						<input name="edad" type="number" class="form-control" placeholder="Edad" required type="number" min="1">
					</article>
					<article class="form-group">
						<label for="Sexo">Sexo:</label>
						<select name="sexo" class="form-control" required>
							<option value="">Sexo</option>
							<option value="0">Femenino</option>
							<option value="1">Masculino</option>
						</select>
					</article>
					<article class="form-group">
						<label for="Correo">Correo:</label>
						<input name="correo" type="text" class="form-control" placeholder="Correo" required type="email">
					</article>
					<input type="submit" value="Registrar" class="btn brn-primary">
					<a href="{{url('inicio')}}" class="btn btn-danger">Cancelar</a>
				</section>
			</form>
@stop	