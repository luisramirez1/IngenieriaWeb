@extends('principal')

@section('encabezado')
	<h2>
		Consulta de Usuarios
		<a href="{{url('/generarPDFusuarios')}}">
			<span class="glyphicon glyphicon-file libro" aria-hidden="true"></span></a>
		</a>
	</h2>
@stop

@section('contenido')
	<table class="table table-hover">
		<thead>
			<tr class="info">
				<th>#</th>
				<th>Nombre</th>
				<th>Edad</th>
				<th>Sexo</th>
				<th>Correo</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
			@foreach($usuarios as $u)
				<tr>
					<td>{{$u->id}}</td>
					<td>{{$u->nombre}}</td>
					<td>{{$u->edad}}</td>
					<td>	
						@if($u->sexo == 0)
						Femenino
						@else
						Masculino
						@endif
					</td>
					<td>{{$u->correo}}</td>
					<td>
						<a href="{{url('/actualizarUsuarios')}}/{{$u->id}}" class="btn-success btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
						<a href="{{url('/eliminarUsuarios')}}/{{$u->id}}" class="btn-danger btn-sm"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop	