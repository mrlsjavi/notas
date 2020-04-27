
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<title>Notas Alegre Infancia</title>
</head>
<body>
		<header>
			<nav>
				
					
					
					@if (auth()->check())
						<a href="/logout">Cerrar Sesion de {{ auth()->user()->name }}</a>
						<a href="/alumno">Alumno</a>
						<a href="/alumno/create">Nuevo Alumno</a>
						<a href="/punteo">Notas</a>
						<a href="/metodo">Metodo de pago</a>
						<a href="/metodo/create">Metodo de Pago Nuevo</a>
						<a href="/tipo">Tipo de pago</a>
						<a href="/tipo/create">Tipo de pago nuevo</a>

						
					@endif
					
					@if(auth()->guest())
						<a  href="/login">Login</a>
					@endif
				
			</nav>

		</header>
		<div class="container">
			@yield('contenido')

		<footer>
			Copyright - Alegre Infancia
		</footer>
		</div>
		

</body>
</html>

