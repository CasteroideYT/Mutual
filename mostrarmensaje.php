<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
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
    <!--Inicia contenido -->
    <section>
        <?php
		include "./php/verificaContacto.php";
		include "./php/database.php";
		include "./php/crudContactov2.php";
		
		if ( datosContacto() ) {
			$rutCliente      = $_POST["rutCliente"];
			$nombreCliente   = $_POST["nombre"];
			$apellidoCliente = $_POST["apellido"];
			$fonoContacto    = $_POST["fonoContacto"];
			$email           = $_POST["email"];
			$mensajeConsulta = $_POST["mensajeConsulta"];
			if ( validaRut( $rutCliente ) && validaCorreo( $email ) && validaFono($fonoContacto) &&
			validaMensaje($mensajeConsulta)){
			    creaCliente( $conexionDB, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fono );
			    creaContacto($conexionDB, $rutCliente,$mensajeConsulta);
			    echo "<h2>Estimado(a) " . $nombreCliente . " " . $apellidoCliente . " Nos contactaremos a travez de su correo " . $email . "</h2>";
		    } else {
			?>
                <h2> Los datos ingresado son incorrectos</h2>
		    <?php
		    }
		} else {
		?>
            <h2>Debe de completar el formulario </h2>
		<?php
		}
		?>
    </section>
    <!-- Fin contenido -->
	<?php
	include "aside.php";
	?>
    <!-- inicia pie de pagina -->
	<?php

	include "piepagina.php"
	?>
    <!-- Termina pie de pagina -->
</div>

<script type="text/javascript" src="./js/valida.js"></script>

</body>
</html>