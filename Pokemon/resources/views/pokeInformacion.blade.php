@extends('principal')

@section('encabezado')
	<h2><b>Pokedex</b></h2>
@stop

@section('contenido')
	
		<section class="">
			<article class="jumbotron">
				<article>
					<h1 id="tituloPokeInfo">{{$pokemon->nombre}} #{{$pokemon->id}}</h1>
					<img id="imagenPokeInfo" src="{{asset("img/pokemon/$pokemon->imagen")}}">
				</article>
				<article class="col-md-7" id="textoDescripcion">
					<blockquote class="blockquote-reverse">
	  					<p>{{$pokemon->descripcion}}</p>
					</blockquote>
				</article>
				<article class="col-md-8" id="art3Desc">
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#caract" data-toggle="tab" aria-expanded="true">Caracteristicas</a></li>
					  	<li class=""><a href="#evol" data-toggle="tab" aria-expanded="false">Evoluciones</a></li>
					  	<li class=""><a href="#config" data-toggle="tab" aria-expanded="false">Editar</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
					  	<div class="tab-pane fade active in" id="caract">
					  		 @foreach($tipo as $t)
					   		 <span>Tipo: {{$t->nombre}}</span><br>
					   		 @endforeach
					   		 <span>Altura: {{$pokemon->altura}} m.</span><br>
					   		 <span>Peso: {{$pokemon->peso}} kg.</span><br>
					   		 <span>Categoria: {{$pokemon->categoria}}</span><br>
					   		 <span>Habilidad: {{$pokemon->habilidad}}</span><br>
					 	</div>
					  	<div class="tab-pane fade" id="evol">
					   		<p></p>
					 	</div>
					 	<div class="tab-pane fade" id="config">
					   		<a href="{{url('/actualizarPokemon')}}/{{$pokemon->id}}" class="btn-info btn-sm" id="botonEdit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					 	</div>
					</div>
				</article>
			</article>
		</section>
	
@stop	
