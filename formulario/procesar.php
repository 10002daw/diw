<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Metadatos -->
		<meta charset="UTF-8">
		<meta name="description" content="Primer PHP de la asignatura de Diseño de Interfaces">
		<meta name="author" content="Eduardo Jiménez">
		<meta name="keywords" content="internet,interfaces,html,html5,páginas web">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="content-language" content="es">
		<!-- <base href="http://www.midominio.com"> -->

		<link rel="icon" href="icono.png" type="image/png">
		<!-- type="image/x-icon" para imágenes .ico -->

		<!-- Título de la web -->
		<title>Procesar PHP</title>
	</head>
	
	<body>
		<div id="resultado">
			<h1>Datos procesados</h1>
			<p>
			  <?php
			  	foreach ($_POST as $k => $v) {
			  		echo "$k: $v";
			  		echo "<br>";
			  	}
			  	print_r($_POST);
			  	//print("Tu nombre es {$_POST['nombre']}");
			  ?>
			</p>
		</div>
	</body>
</html>
