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
    <!--Inicia contenido -->
    <section>
        <?php
		include "./php/verificaContacto.php";
		include "./php/database.php";
		include "./php/crudContactov2.php";
		$fecha = getdate();

		if ( datosContacto() ) {
			$rutCliente      = $_POST["rutCliente"];
			$nombreCliente   = $_POST["nombre"];
			$apellidoCliente = $_POST["apellido"];
			$telefono        = $_POST["telefono"];
			$email           = $_POST["email"];
			$mensaje         = $_POST["mensaje"];
			if ( validaRut( $rutCliente ) && validaCorreo( $email ) && validaFono($telefono) &&
			validaMensaje($mensaje)){
			    creaCliente( $conexiondb, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fono );
			    creaContacto( $conexiondb, $rutCliente,$mensaje);
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