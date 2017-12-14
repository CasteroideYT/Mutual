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
		include "./php/verificaSimulador.php";
        include "./php/database.php";
        include "./php/crudSimuladorv2.php";
        
		if ( datosSimulacion() ) {
			$rutCliente      = $_POST["rutCliente"];
			$nombreCliente   = $_POST["nombre"];
			$apellidoCliente = $_POST["apellido"];
			$sueldoCliente   = $_POST["sueldoCliente"];
			$montoSolicitado = $_POST["montoSolicitado"];
			$cuotasCredito   = $_POST["cuotasCredito"];
			$interes         = $_POST["interes"];
			$email           = $_POST["email"];
			$fono=0;

			//TOdo cambiar esto
 			//if ( validaRut( $rutCliente ) && validaCorreo( $email ) && numeroCuotas( $cuotasCredito ) && interesPrestamo( $interes )
			  //   && validaIngreso( $sueldoCliente ) && validaMontoSolicitado( $montoSolicitado ) ) {
			    creaCliente($conexionDB,$rutCliente,$nombreCliente,$apellidoCliente,$email);
                crearSimulacion($conexionDB,$sueldoCliente,$rutCliente,$montoSolicitado,$cuotasCredito,$interes,1,0,0);
				echo "<h2>Estimado(a) " . $nombreCliente . " " . $apellidoCliente . " La informacion se envio a su correo " . $email . "</h2>";
			} else {
				?>
                <h2> Los datos ingresado son incorrectos</h2>
				<?php
			}
		//} else {
	            ?>
        <h2>Debe de completar el formulario </h2>
        <?php
		//}
		?>
    </section>
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