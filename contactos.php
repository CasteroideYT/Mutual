<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mutual</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5, user-scalable=yes"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="contenedorDiv">
	<!-- Inicia Header -->
	<?php
	include "./header.php"
	?>
	<!-- Termina Header -->
	<!-- Inicia navbar-->
	<?php
	include "./navbar.php";
	?>
	<!--termina navbar-->
	<section>
		<?php
		if(isset($_GET["codigo"])&& $_GET !="") {
			$cod = $_GET["codigo"];
			?>
			<h3>Por favor, ingresa los datos solicitados</h3>
			<form method="post" action="contactos.php">
				<input type="text" name="codigo" hidden contenteditable="false"  value="
                <?php
				print $cod;
				?>">
				<label>Rut</label>
				<input type="text" name="rut">
				<input type="submit" value="Buscar">
			</form>
			<?php
		}else if (!isset($_POST["codigo"],$_POST["rut"]) || ($_POST["codigo"]=="" || $_POST["rut"]=="")){ //Todo, cambiar por else if con conexion a BBDD ?>
			<h1>Esto se esta mostrando 1</h1>
			<h3>Por favor, ingresa los datos solicitados</h3>
			<form method="post" action="contactos.php">
				<label>Codigo de contacto</label>
				<input type="number" name="codigo">
				<label>Rut</label>
				<input type="text" name="rut">
				<input type="submit" value="Buscar">
			</form>
			<?php
		}else {
		    include "./php/database.php";
		    $idcontacto = $_POST["codigo"];
		    $rut = $_POST["rut"];

			/*$dbhost = "localhost";
			$dbusuario = "cursos";
			$dbpassword = "1234";
			$db = "cursos";
			$conexionDB = new mysqli($dbhost, $dbusuario, $dbpassword, $db); */
		    include "./php/crudContactov2.php";

            $contacto = verContacto($conexionDB,$conexionDB);
            printf($contacto);
			?>
			<h1>Hola mundo</h1>
			<?php
		}
		?>
	</section>
	<?php
	include "aside.php";
	?>
	<!-- inicia pie de pagina -->
	<?php

	include "./piepagina.php"
	?>
	<!-- Termina pie de pagina -->
</div>
</body>
</html>