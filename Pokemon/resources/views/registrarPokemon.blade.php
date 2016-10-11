@extends('principal')

@section('encabezado')
	<h2>Registro de Pokémon</h2>
@stop

@section('contenido')
<form action="{{url('/guardarPokemon')}}" method="POST" class="jumbotron" id="form1">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<section id="seccion1">
			<article class="form-group">
				<label for="Nombre">Nombre:</label>
				<input name="nombre" type="text" class="form-control" placeholder="Nombre" required>
			</article>
			<article class="form-group">
				<label for="Altura">Altura:</label>
				<input name="altura" type="number" class="form-control" placeholder="Altura" required>
			</article>
			<article class="form-group">
				<label for="Peso">Peso:</label>
				<input name="peso" type="number" class="form-control" placeholder="Peso" required>
			</article>
			<article class="form-group">
				<label for="Categoria">Categoria:</label>
				<input name="categoria" type="text" class="form-control" placeholder="Categoria" required>
			</article>
			<article class="form-group">
				<label for="Habilidad">Habilidad:</label>
				<input name="habilidad" type="text" class="form-control" placeholder="Habilidad" required>
			</article>
			<article class="form-group">
				<label for="Tipo">Tipo:</label>
				<select name="Tipo" class="form-control" required>
					<option value="">Tipo</option>
					<option value="0">Femenino</option>
					<option value="1">Masculino</option>
				</select>
			</article>
			<article class="form-group">
				<label for="Descripcion">Descripcion:</label>
				<input name="descripcion" type="text" class="form-control" placeholder="Descripcion" required>
			</article>
			<article class="form-group">
				<label for="Imagen">Imagen:</label>
				<input name="imagen" type="file" class="form-control" required>
			</article>
			<input type="submit" value="Registrar" class="btn btn-info" id="botonRegistrar">
			<a href="{{url('inicio')}}" class="btn btn-primary">Cancelar</a>
		</section>
</form>
@stop	