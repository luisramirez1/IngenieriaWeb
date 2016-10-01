@extends('principal')

@section('encabezado')
	<h2>Asignar Usuarios</h2>
@stop

@section('contenido')
	
	<section class="panel panel-primary">
  		<article class="panel-heading">
  			<h3>Proyecto: <span>{{$proyecto->nombre}}</span></h3>
  		</article>
  		<article class="panel-body">
  			 <i class="glyphicon glyphicon-user" id="usuario"></i>
    		<select name="id_usu" class="form-control">
    			<option value="">Usuarios</option>
				@foreach($usuarios as $u)
					<option value="{{$u->id}}">{{$u->nombre}}</option>
				@endforeach
			</select>
			<article id="art1">
				<button type="submit" class="btn-info" id="botonA">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button>
			</article>
  		</article>
	</section>

	<section class="panel panel-info">
  		<article class="panel-heading">
  			<h3>Usuarios Asignados</h3>
  		</article>
  		<article class="panel-body">
		   <table class="table table-hover">
				<thead>
					<tr class="warning">
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
								<a href="" class="btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
  		</article>
	</section>
@stop	