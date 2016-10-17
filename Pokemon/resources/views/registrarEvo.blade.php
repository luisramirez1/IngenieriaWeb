@extends('principal')

@section('encabezado')
	<h2><b>Registro de Evoluciones</b></h2>
@stop

@section('contenido')
<form action="{{url('/guardarEvo')}}" method="POST" class="jumbotron" id="form1" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
		<section id="seccion1">
			<article class="form-group">
				<label for="NumeroPokemon">Numero de Pokemon:</label>
				<input name="numeroPokemon" type="number" class="form-control" placeholder="Numero de Pokemon" required min="0">
			</article>
			<article class="form-group">
				<label for="Imagen">Imagen1:</label>
				<input name="imagen1" type="file" class="form-control" accept="image/*" required>
			</article>
			<article class="form-group">
				<label for="Imagen">Imagen2:</label>
				<input name="imagen2" type="file" class="form-control" accept="image/*" required>
			</article>
			<article class="form-group">
				<label for="Imagen">Imagen3:</label>
				<input name="imagen3" type="file" class="form-control" accept="image/*">
			</article>
			<input type="submit" value="Registrar" class="btn btn-info" id="botonRegistrar">
			<a href="{{url('/')}}" class="btn btn-primary">Cancelar</a>
		</section>
</form>
@stop	