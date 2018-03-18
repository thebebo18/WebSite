<!DOCTYPE html>
<html lang="es-ES">

	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="Style.css">
		<meta charset="UTF-8">
		<title>Nombre del Sitio</title>
	</head>

	<body>
	<div class="container-fluid">
		<header>
			<nav>
				<ul>
					<li><a href="Index.html">Inicio</a></li>
					<li><a href="Registrate.html">Registrate</a></li>
					<li><a href="QueBuscas.html">Que Buscas</a></li>
					<li><a href="Ayuda.html">Ayuda</a></li>
				</ul>
		    </nav>
		    <div id="buscar">
				<form action="Index.html">
					<input type="text" id="fname" name="firstname" placeholder="Buscar..">  
				    <input type="submit" value="buscar">
				</form>
			</div>
		</header>

		<div id="centro">
			<?php
				$conn = new mysqli("localhost","root","","tienda");
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
			?>
		</div>
		
		<aside>	
		
		</aside>

		<div id="footer">
			<p>Jose Alexis Moreno Abad</p>
			<p><a href="https://www.linkedin.com/in/jose-alexis-moreno-abad-b936a1136/">linkedig</a></p>
			<p>Celular: 829-291-6844</p>
		</div>
	</body>
</div>
</html>
