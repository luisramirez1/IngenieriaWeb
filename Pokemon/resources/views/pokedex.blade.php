@extends('principal')

@section('encabezado')
	<h2><b>Pokedex</b></h2>
@stop

@section('contenido')
	@foreach($pokemon as $p)
		
		<article class="col-md-3">
			<div class="list-group">
				
				<a class="list-group-item active" id="tipoP0">
		   				{{$p->nombre}} #{{$p->id}}
		  		</a>
	  			<a href="{{url('/pokeInformacion')}}/{{$p->id}}" class="list-group-item" id="imagenPoke" onmouseover='this.style.background="#BFBFBF"' onmouseout='this.style.background="#DCDCDC"'>
	  				<img src="{{asset("img/pokemon/$p->imagen")}}" alt="">
	  			</a>
			</div>
		</article>
	@endforeach

@stop	
