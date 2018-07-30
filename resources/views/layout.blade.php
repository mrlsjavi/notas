
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
						<a href="">Alumno</a>
						<a href="">Ausencias</a>
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

