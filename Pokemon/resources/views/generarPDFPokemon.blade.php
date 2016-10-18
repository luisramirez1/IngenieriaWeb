<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>{{$pokemon->nombre}}.pdf</title>

	<style>
		hr
		{
			width: 90%;
		}
		html
		{
			margin: 0;
		}
		body
		{
			font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
		}
		img
		{
			margin-left: 4px;
			margin-top: 4px;
		}
		
		#art1
		{
			margin-left: 60px;
			margin-top: 80px;
		}
		#art2
		{
			background: #30a7d7;
			border-radius: 5px;
			color: white;
			margin: 0 auto;
			margin-top: 20px;
			width: 70%;
		}
		#art4
		{
			margin-top: 50px;
		}
		#art4 hr
		{
			width: 80%;
		}
		#candy
		{		
			margin-left: 330px;	
			margin-top: 3px;
			width: 18px;
		}
		#dos
		{
			color:#212121;
			margin-left: 7px;
		}
		#descripcion
		{
			background: gray;
			border-radius: 10px;
			color: #D8D8D8;
			margin-top: -185px;
			padding: 10px;
			margin-left: 235px;
			height: 135px;
			width: 400px;
			text-align: justify;
		}
		#evolucion1
		{
			margin-left: 77px;
			width: 19%;
		}
		#evolucion2
		{
			width: 19%;
		}

		#evolucion3
		{
			width: 19%;
		}

		#flecha
		{
			margin-top: 65px;
			width: 10%;
		}
		#imgP
		{
			background-image: url('fondo3.png');
			border-radius: 80px;
			margin-left: 20px;
			width: 31%;
		}
		#idPoke
		{
			color: #4592c4;
		}
		#nombrePoke
		{
			margin-top: 60px;
			color: #444444;
			margin-left: 50px;

		}
		#otro
		{
			color:#212121;
		}
		#otro1
		{
			margin-top: 20px;
			margin-left: 80px;
		}
		#otro2
		{
			margin-top: 5px;
			margin-left: 80px;
		}
		#otro3
		{
			margin-bottom: 20px;
			margin-top: 5px;
			margin-left: 80px;
		}
		#ps
		{
			margin-top: -115px;
			margin-left: 360px;
		}
		#pc
		{
			margin-top: -95px;
			margin-left: 360px;
		}
		#polvos
		{
			margin-left: 330px;	
			width: 18px;
		}
		#pol
		{
			margin-top: -65px;
		}
		#can
		{
			margin-top: -65px;
			margin-left: 80px;
		}
		
	</style>
</head>
<body background="fondoo.jpg">
	<h1 id="nombrePoke"><b>{{$pokemon->nombre}}</b> <span id="idPoke">  #{{$pokemon->id}}</span></h1>
	<hr>
	<article id="art1">
		<img id="imgP" src="{{asset("img/pokemon/$pokemon->imagen")}}">
		<article id="descripcion">{{$pokemon->descripcion}}</article>
	</article> <br>
	<article id="art2">
		<article id="art3">
			@foreach($tipo as $t)
			<div id="otro1"><b>Tipo:</b> <a id="otro">{{$t->nombre}}</a></div>
			@endforeach
			<div id="otro2"><b>Altura:</b> <a id="otro">{{$pokemon->altura}}</a></div>
			<div id="otro2"><b>Peso:</b> <a id="otro">{{$pokemon->peso}}</a></div>
			<div id="otro2"><b>Categoria:</b> <a id="otro">{{$pokemon->categoria}}</a></div>
			<div id="otro3"><b>Habilidad:</b> <a id="otro">{{$pokemon->habilidad}}</a></div>
		</article>
		<article id="art3">
			<div id="ps"><b>PS:</b> <a id="otro">{{$pokemon->ps}} / {{$pokemon->ps}}</a></div>
		</article>
		<article>
			<div id="pc"><b>PC:</b> <a id="otro">{{$pokemon->pc}}</a></div>
		</article>
		<article>
			<div id="pol"><img id="polvos" src="{{asset("img/polvo.png")}}"> <a id="otro">{{$item->polvos}}</a></div>
		</article>
		<article>
			<div id="can"><img id="candy" src="{{asset("img/candy.png")}}"><a id="dos">{{$item->caramelos}}</a></div>
		</article>
	</article>
	<article id="art4">
	<!-- <hr> -->
		<img id="evolucion1" src="{{asset("img/pokemon/$evoluciones->evolucion1")}}">
		@if($evoluciones->evolucion2 <> null)
		 	<img id="flecha" src="{{asset("img/f1.png")}}">
		 	<img id="evolucion2" src="{{asset("img/pokemon/$evoluciones->evolucion2")}}">
		@endif
		@if($evoluciones->evolucion3 <> null)
		 	<img id="flecha" src="{{asset("img/f1.png")}}">
		 	<img id="evolucion3" src="{{asset("img/pokemon/$evoluciones->evolucion3")}}">
		@endif
	<!-- <hr> -->
	</article>
</body>
</html>