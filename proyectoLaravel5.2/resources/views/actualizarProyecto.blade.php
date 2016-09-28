@extends('principal')

@section('encabezado')
	<h2>Editar informacion de Proyectos</h2>
@stop

@section('contenido')
	
		<form action="{{url('/actualizarProyectos')}}/{{$proyecto->id}}" method="POST" class="jumbotron" id="form1">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<section id="seccion1">
					<article class="form-group">
						<label for="Nombre">Nombre:</label>
						<input name="nombre" type="text" class="form-control" placeholder="Nombre" required value="{{$proyecto->nombre}}">
					</article>
					<article class="form-group">
						<label for="FechaI">Fecha de Inicio:</label>
						<input name="fechaI" type="date" class="form-control" placeholder="Fecha de Inicio" required value="{{$proyecto->f_inicio}}">
					</article>
					<article class="form-group">
						<label for="FechaF">Fecha de Fin:</label>
						<input name="fechaF" type="date" class="form-control" placeholder="Fecha de Fin" required value="{{$proyecto->f_fin}}">
					</article>
					<input type="submit" value="Modificar" class="btn brn-primary">
					<a href="{{url('consultarProyectos')}}" class="btn btn-danger">Cancelar</a>
				</section>
		</form>

@stop	