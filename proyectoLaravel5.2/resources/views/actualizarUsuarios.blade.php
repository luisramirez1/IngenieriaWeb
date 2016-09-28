@extends('principal')

@section('encabezado')
	<h2>Edtar informacion de Usuarios</h2>
@stop

@section('contenido')
		<form action="{{url('/actualizarUsuario')}}/{{$usuarios->id}}" method="POST" class="jumbotron" id="form1">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<section id="seccion1">
					<article class="form-group">
						<label for="Nombre">Nombre:</label>
						<input name="nombre" type="text" class="form-control" placeholder="Nombre" required value="{{$usuarios->nombre}}">
					</article>
					<article class="form-group">
						<label for="Edad">Edad:</label>
						<input name="edad" class="form-control" placeholder="Edad" required type="number" min="1" value="{{$usuarios->edad}}">
					</article>
					<article class="form-group">
						<label for="Sexo">Sexo:</label>
						<select name="sexo" class="form-control" required>
							<option value="">Sexo</option>
							@if($usuarios->sexo == 0)
							<option value="0" selected>Femenino</option>
							<option value="1">Masculino</option>
							@else
							<option value="0">Femenino</option>
							<option value="1" selected="">Masculino</option>
							@endif
						</select>
					</article>
					<article class="form-group">
						<label for="Correo">Correo:</label>
						<input name="correo" class="form-control" placeholder="Correo" required type="email" value="{{$usuarios->correo}}">
					</article>
					<input type="submit" value="Actualizar" class="btn brn-primary">
					<a href="{{url('consultarUsuarios')}}" class="btn btn-danger">Cancelar</a>
				</section>
			</form>
@stop	