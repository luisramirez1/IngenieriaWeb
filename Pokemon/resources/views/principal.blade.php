<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pokémon</title>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <link rel="stylesheet" href="{{asset("css/estilos.css")}}">
	<script src="{{asset("js/jquery.js")}}"></script>
	<script src="{{asset("js/bootstrap.js")}}"></script>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset("img/logo.png")}}" alt="Pokémon" id="logo">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img src="{{asset("img/pokeball.png")}}" alt="" id="pokeball">
            Pokémon 
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrarPokemon')}}">Registrar</a></li>
            <!--<li class="divider"></li>
            <li><a href="#">Registrar Tipo</a></li> -->
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            <img src="{{asset("img/pokedex.png")}}" alt="" id="pokeball">
            Pokédex 
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/pokedex')}}">Todos</a></li>
            <li class="divider"></li>
            <li><a href="{{url('/pokedexTipos')}}/1">Agua</a></li>
            <li><a href="{{url('/pokedexTipos')}}/2">Electrico</a></li>
            <li><a href="{{url('/pokedexTipos')}}/3">Fuego</a></li>
            <li><a href="{{url('/pokedexTipos')}}/4">Hierba</a></li>
            <li><a href="{{url('/pokedexTipos')}}/5">Psiquico</a></li>
            <li><a href="{{url('/pokedexTipos')}}/6">Veneno</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <img src="{{asset("img/go.png")}}" alt="" id="go">
        <!-- <button type="submit" class="btn btn-default"></button> -->
      </form>
    </div>
  </div>
</nav>

<section class="container">
	<article class="row">
		<article class="col-xs-12">
			@yield('encabezado')
			<hr>
			@yield('contenido')
		</article>
	</article>
</section>

<footer>  
	<hr>
	<div class="text-center">Ingeneria Web &copy; 2016</div>
  <div class="text-center">Ramirez Salazar Luis Fernando</div>
  <div class="text-center">Sanz Lopez Jose Mario</div>
</footer>
</body>
</html>