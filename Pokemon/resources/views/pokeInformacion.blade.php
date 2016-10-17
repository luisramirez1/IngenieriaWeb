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
				<section id="itemPsPC">
					<article id="psPC">
						<span><b>PS:</b> {{$pokemon->ps}} / {{$pokemon->ps}}</span><br>
						<span><b>PC:</b> {{$pokemon->pc}}</span>
					</article>
					<article id="items">
						<img id="polvos" src="{{asset("img/polvo.png")}}"> {{$item->polvos}}
						<img id="candy" src="{{asset("img/candy.png")}}"><span id="dos">{{$item->caramelos}}</span>
					</article>
				</section> <br>
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#caract" data-toggle="tab" aria-expanded="true">Caracteristicas</a></li>
					  	<li class=""><a href="#evol" data-toggle="tab" aria-expanded="false">Evoluciones</a></li>
					  	<li class=""><a href="#config" data-toggle="tab" aria-expanded="false">Opciones</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
					  	<div class="tab-pane fade active in" id="caract">
					  		 @foreach($tipo as $t)
					   		 <span><b>Tipo:</b> {{$t->nombre}}</span><br>
					   		 @endforeach
					   		 <span><b>Altura:</b> {{$pokemon->altura}} m.</span><br>
					   		 <span><b>Peso:</b> {{$pokemon->peso}} kg.</span><br>
					   		 <span><b>Categoria:</b> {{$pokemon->categoria}}</span><br>
					   		 <span><b>Habilidad:</b> {{$pokemon->habilidad}}</span><br>
					 	</div>
					  	<div class="tab-pane fade" id="evol">
							 	<img id="evolucion1" src="{{asset("img/pokemon/$evoluciones->evolucion1")}}">
							 	@if($evoluciones->evolucion2 <> null)
							 	<img id="flecha" src="{{asset("img/f1.png")}}">
							 	<img id="evolucion2" src="{{asset("img/pokemon/$evoluciones->evolucion2")}}">
							 	@endif
							 	@if($evoluciones->evolucion3 <> null)
							 	<img id="flecha" src="{{asset("img/f1.png")}}">
							 	<img id="evolucion3" src="{{asset("img/pokemon/$evoluciones->evolucion3")}}">
							 	@endif
					 	</div>
					 	<div class="tab-pane fade" id="config">
					 		<article id="editar">
					   		<a href="{{url('/actualizarPokemon')}}/{{$pokemon->id}}" class="btn-info btn-xs" id="botonEdit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a> 
					   		<span>{{$pokemon->nombre}}</span>
					   		</article>
					   		<article id="poder">
					   			<a href="{{url('/poder')}}/{{$pokemon->id}}" class="btn-info btn-xs" id="botonPoder"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Poder</a>
								<img id="polvos" src="{{asset("img/polvo.png")}}">100
								<img id="candy" src="{{asset("img/candy.png")}}"><span id="dos">2</span>	
					   		</article>
					 	</div>
					</div>
				</article>
			</article>
		</section>
	
@stop	
