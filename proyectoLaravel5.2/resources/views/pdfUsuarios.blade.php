<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
</head>
<body>
	<h1>Liista de Usuarios</h1>
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