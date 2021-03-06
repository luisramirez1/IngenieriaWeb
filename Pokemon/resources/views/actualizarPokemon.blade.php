@extends('principal')

@section('encabezado')
	<h2><b>Editar Pokémon: <b id="nombrePokeE">{{$pokemon->nombre}}</b></b></h2> 
	<img id="imgEditar" src="{{asset("img/pokemon/$pokemon->imagen")}}"" alt="">
@stop

@section('contenido')
<form action="{{url('/actualizarPokemon')}}/{{$pokemon->id}}" method="POST" class="jumbotron" id="form1" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<section id="seccion1">
			<article class="form-group">
				<label for="NumeroPokemon">Numero de Pokemon:</label>
				<input name="numeroPokemon" type="number" class="form-control" placeholder="Numero de Pokemon" required min="0" value="{{$pokemon->id}}">
			</article>
			<article class="form-group">
				<label for="Nombre">Nombre:</label>
				<input name="nombre" type="text" class="form-control" placeholder="Nombre" required value="{{$pokemon->nombre}}">
			</article>
			<article class="form-group">
				<label for="Altura">Altura:</label>
				<input name="altura" class="form-control" placeholder="Altura" required value="{{$pokemon->altura}}" onkeypress="return justNumbers(event);">
			</article>
			<article class="form-group">
				<label for="Peso">Peso:</label>
				<input name="peso" class="form-control" placeholder="Peso" required value="{{$pokemon->peso}}" onkeypress="return justNumbers(event);">
			</article>
			<article class="form-group">
				<label for="Categoria">Categoria:</label>
				<input name="categoria" type="text" class="form-control" placeholder="Categoria" required value="{{$pokemon->categoria}}">
			</article>
			<article class="form-group">
				<label for="Habilidad">Habilidad:</label>
				<input name="habilidad" type="text" class="form-control" placeholder="Habilidad" required value="{{$pokemon->habilidad}}">
			</article>
			<article class="form-group">
				<label for="Tipo">Tipo:</label>
				<select name="tipo" class="form-control" required>
					<option value="">Tipos</option>
					@foreach($tipo as $t)
						<option value="{{$t->id}}">{{$t->nombre}}</option>
					@endforeach
				</select>
			</article>
			<article class="form-group">
				<label for="Descripcion">Descripcion:</label>
				<input name="descripcion" type="text" class="form-control" placeholder="Descripcion" required value="{{$pokemon->descripcion}}">
			</article>
			<article class="form-group">
				<label for="Imagen">Imagen:</label>
				<input name="imagen" type="file" class="form-control" accept="image/*" required>
			</article>
			<input type="submit" value="Editar" class="btn btn-info" id="botonRegistrar">
			<a href="javascript:history.back(-1);" class="btn btn-primary">Cancelar</a>
		</section>
</form>
@stop	