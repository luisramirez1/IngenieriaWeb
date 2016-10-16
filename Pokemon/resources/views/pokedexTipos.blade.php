@extends('principal')

@section('encabezado')
	<h2><b>Pokedex</b></h2>
@stop

@section('contenido')
	@foreach($pokemon as $p)
	
		<article class="col-md-3">
			<div class="list-group">
			
				@if($tipoColor ==1)
				<a class="list-group-item active" id="tipoP1">
		   			{{$p->nombre}} #{{$p->id}}
		  		</a>
	  			@endif 

	  			@if($tipoColor ==2)
				<a class="list-group-item active" id="tipoP2">
		   			{{$p->nombre}} #{{$p->id}}
		  		</a>
	  			@endif  
	  			
	  			@if($tipoColor ==3)
				<a class="list-group-item active" id="tipoP3">
		   			{{$p->nombre}} #{{$p->id}}
		  		</a>
	  			@endif  
	  			
	  			@if($tipoColor ==4)
				<a class="list-group-item active" id="tipoP4">
		   			{{$p->nombre}} #{{$p->id}}
		  		</a>
	  			@endif  
	  			
	  			@if($tipoColor ==5)
				<a class="list-group-item active" id="tipoP5">
		   			{{$p->nombre}} #{{$p->id}}
		  		</a>
	  			@endif  
	  			
	  			@if($tipoColor ==6)
				<a class="list-group-item active" id="tipoP6">
		   			{{$p->nombre}} #{{$p->id}}
		  		</a>
	  			@endif   
			
				
	  			<a href="{{url('/pokeInformacion')}}/{{$p->id}}" class="list-group-item" id="imagenPoke" onmouseover='this.style.background="#BFBFBF"' onmouseout='this.style.background="#DCDCDC"'>
	  				<img src="{{asset("img/pokemon/$p->imagen")}}" alt="">
	  			</a>
			</div>
		</article>
	
@endforeach

@stop	
