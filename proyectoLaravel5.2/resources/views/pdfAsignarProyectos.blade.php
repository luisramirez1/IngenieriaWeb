<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
</head>
<body>
	<h1>Proyecto: <span>{{$proyecto->nombre}}</span></h1>
	<hr>
	<h3>Lista de Usuarios</h3>
	<hr>
	<table>
		<tr>
			<td>#</td>
			<td>Nombre</td>
			<td>Edad</td>
			<td>Sexo</td>
			<td>Correo</td>
		</tr>
		@foreach($usuarios as $u)
		<tr>
			<td>{{$u->id}}</td>
			<td>{{$u->nombre}}</td>
			<td>{{$u->edad}}</td>
			<td>
				@if($u->sexo==0)
				Femenino
				@else
				Masculino
				@endif
			</td>
			<td>{{$u->correo}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>