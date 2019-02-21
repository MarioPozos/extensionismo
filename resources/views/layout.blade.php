<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
</head>
<body>
	<nav>
		<ul>
			<li ><a href="/">Inicio</a></li>
			<li ><a href="/registro">Registro</a></li>
			<li ><a href="/ayuda">Ayuda</a></li>
		</ul>
	</nav>
	@yield('contenido')
</body>
</html>