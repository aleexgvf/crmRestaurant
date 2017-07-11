<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>BACANON</title>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
	<script src="{{asset("js/jquery-3.2.1.js")}}""></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}"> BACANON Mariscos </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registros <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('')}}">Registrar Trabajador</a></li>
            <li><a href="{{url('')}}">Registrar Cliente</a></li>
            <li><a href="{{url('')}}">Registrar puesto</a></li>
            <li class="divider"></li>
            <li><a href="{{url('')}}"> Registrar Platillo</a></li>
            <li><a href="{{url('/registrarBebidas')}}"> Registrar Bebidas</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultas <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('')}}">Consultar Trabajadores</a></li>
            <li><a href="{{url('')}}">Consultar Clientes</a></li>
            <li><a href="{{url('')}}">Consultar Puestos</a></li>
            <li class="divider"></li>
            <li><a href="{{url('')}}">Consultar Platillos</a></li>
            <li><a href="{{url('')}}">Consultar Bebidas</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<div clas="row">
	 <div>
		@yield('contenido')	
	 </div>
	</div>
</div>

<footer class="text-center">
	<hr>
	BACANON &copy; 2017
</footer>
<script src="{{asset("js/bootstrap.js")}}""></script>
</body>
</html>