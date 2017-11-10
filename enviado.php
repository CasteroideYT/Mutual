<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simulador de credito</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="contenedorDiv">
    <!-- Inicia Header -->
	<?php
	include "header.php"
	?>
    <!-- Termina Header -->
    <!-- Inicia navbar-->
	<?php
	include "navbar.php";
	?>
    <!--termina navbar-->
	<section>
            <?php

            if (isset($_POST["rutCliente"],$_POST["nombre"],$_POST["apellido"],$_POST["email"], $_POST["sueldoCliente"],
                $_POST["montoSolicitado"], $_POST["cuotasCredito"]) && $_POST["interes"]==4) {
	            $nombre= $_POST["nombre"];
	            $apellido=$_POST["apellido"];
	            $email = $_POST["email"];
	            echo "<h2>Estimado(a) " . $nombre . " " . $apellido . " La informacion se envio a su correo " . $email . "</h2>";
            }else{
                ?>
                <h2> Los datos ingresado son incorrectos</h2>
            <?php
            }
            ?>
	</section>
	<aside style="vertical-align: top;">
		<iframe src="css/login.html" frameborder="0" scrolling="no" height="382" width="310" title="Login"></iframe>
		<img src="img/oferta.jpg" style="align-content: center; height: 190px; width: 190px">
		<table style="text-align: center; min-width: 190px;">
			<tr>
				<td style="text-align: center; min-width: 190px;"> <a href="#">Oferta 01 </a> </td>
			</tr>

			<tr>
				<td style="text-align: center; min-width: 190px;"> <a href="#">Oferta 01 </a> </td>
			</tr>

			<tr>
				<td style="text-align: center; min-width: 190px;"> <a href="#">Oferta 01 </a> </td>
			</tr>
		</table>
	</aside>
    <!-- inicia pie de pagina -->
	<?php
	include "piepagina.php"
	?>
    <!-- Termina pie de pagina -->
</div>
<script type="text/javascript" src="./js/valida.js"></script>
</body>
</html>