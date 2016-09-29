<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Proyectos</title>
</head>
<body>
	<h1>Lista de Proyectos</h1>
	<hr>
	<table>
		<tr>
			<td>#</td>
			<td>Nombre</td>
			<td>Fecha</td>
			<td>Fecha</td>
		</tr>
		@foreach($proyecto as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->nombre}}</td>
			<td>{{$p->f_inicio}}</td>
			<td>{{$p->f_fin}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>