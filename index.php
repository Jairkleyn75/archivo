<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-escale=1">

	<title>Administración de Archivos</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Este botó despliega la barra de navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Adminstración de Archivo</a>
			</div>
			<div class="navbar-collapse collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="#">Entradas</a></li>
					<li><a href="#">Favoritos</a></li>
					<li><a href="#">Autores</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> &nbsp; Iniciar</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Registro</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="jumbotron ">
			<h1>Gestión de Archivos</h1>
			<p>Pagina diseñada para la gestión, organización y almacenamientode información documental, fisica y digital</p>			
		</div>		
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default ">
							<div class="panel-heading">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Búsqueda
							</div>
							<div class="panel-body">
								<div class="form-group">
									<input type="search" class="form-control" placeholder="¿Qué buscas?">
								</div>
								<button class="form-control">Buscar</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default ">
							<div class="panel-heading">
								<span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
							</div>
							<div class="panel-body">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default ">
							<div class="panel-heading">
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
							</div>
							<div class="panel-body">

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="panel panel-default ">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span> Últimas Entradas
					</div>
					<div class="panel-body">

						<p>Tovavía no hay entradas para mostrar</p>
					</div>
				</div>
			</div>
		</div>


	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>