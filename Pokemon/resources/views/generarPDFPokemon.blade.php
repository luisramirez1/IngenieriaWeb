<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>{{$pokemon->nombre}}.pdf</title>

	<style>
		#pokeFoto
		{
			text-align: center;
			margin: 0 auto;
		}
		#nombrePoke
		{
			color: #444444;
			font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		}
		#idPoke
		{
			color: #4592c4;
		}
	</style>
</head>
<body>
	<h1 id="nombrePoke"><b>{{$pokemon->nombre}}</b> <span id="idPoke">  #{{$pokemon->id}}</span></h1>
	<hr>

	<article id="pokeFoto">
	<img src="{{asset("img/pokemon/$pokemon->imagen")}}"><br>
	</article>
	<span>{{$pokemon->descripcion}}</span>
	
	
	<span>Nombre: {{$pokemon->nombre}}</span><br>
	<span>Altura: {{$pokemon->altura}}</span><br>
	<span>Peso: {{$pokemon->peso}}</span><br>
</body>
</html>