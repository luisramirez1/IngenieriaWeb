@extends('principal')

@section('encabezado')
	<h2>Consulta de Proyectos</h2>
@stop

@section('contenido')
	<table class="table table-hover">
		<thead>
			<tr class="info">
				<th>#</th>
				<th>Nombre</th>
				<th>Fecha de Inicio</th>
				<th>Fecha de Fin</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($proyectos as $p)
				<tr>
					<td>{{$p->id}}</td>
					<td>{{$p->nombre}}</td>
					<td>{{$p->f_inicio}}</td>
					<td>{{$p->f_fin}}</td>
					<td>
						<a href="{{url('/actualizarProyecto')}}/{{$p->id}}" class="btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
						<a href="{{url('/eliminarProyectos')}}/{{$p->id}}" class="btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop	