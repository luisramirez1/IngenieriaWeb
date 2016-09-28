<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestion de Proyectos</title>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
  <link rel="stylesheet" href="{{asset("css/estilos.css")}}">
	<script src="{{asset("js/jquery.js")}}"></script>
	<script src="{{asset("js/bootstrap.js")}}"></script>
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/inicio')}}">Gestion de Proyectos</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registroUsuario')}}">Registrar</a></li>
            <li class="divider"></li>
            <li><a href="{{url('/consultarUsuarios')}}">Consultar</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proyectos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registroProyecto')}}">Registrar</a></li>
            <li class="divider"></li>
            <li><a href="{{url('/consultarProyectos')}}">Consultar</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default glyphicon glyphicon-search"></button>
      </form>
     <!--  <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul> -->
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
</footer>
</body>
</html>