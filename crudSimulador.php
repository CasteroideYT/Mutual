|<?php
	
	$dbhost = "localhost";
	$dbusuario = "cursos";
	$dbpassword = "1234";
	$db = "cursos";
	$conexion = new mysqli($dbhost, $dbusuario, $dbpassword, $db);

	$fechaSimulacion = getdate();

	// Funciones CRUD
	function crearSimulacion ($conexion, $rutCliente,  $montoSolicitado, $numeroCutoas, $tasaInteres, $degravamen, $accidentes, $cesantia, $fechaSimulacion){
		$insertInto = "INSERT INTO Simulaciones(montoSolicitado, numeroCutoas, tasaInteres, degravamen, accidentes, cesantia, fechaSimulacion, rutCliente)"
		$sql = $insertInto." VALUES ("
				.$montoSolicitado.","
				.$numeroCutoas.","
				.$tasaInteres.","
				.$degravamen.","
				.$accidentes.","
				.$cesantia.","
				.$fechaSimulacion.", '"
				.$rutCliente."');"
		$resultado = $conexion->query($sql);
		return $resultado;		
	}


	function actualizaCliente($conexion, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fonoContacto, $ingresoCliente) {
		$update = "UPDATE Clientes SET "
		$sql = "nombreCliente = '".$nombreCliente."' "
				."apellidoCliente = '".$apellidoCliente."' "
				."email = '".$email."' "
				."telefono = ".$fonoContacto." "
				."ingresoMensual = ".$ingresoMensual." ";

		$where = "where idCliente = '".$rutCliente."'";
		$resultado = $conexion->query($update.$sql.$where);
		return $resultado;
	}

	function todasSimulaciones($conexion) {
		$sql = "SELECT * FROM Clientes Simulaciones";
		$resultado = $conexion->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}

	function borrarCredito($conexion, $idCredito) {
		$sql = "DELETE FROM Simulaciones WHERE idCredito = '".$idCredito."';";
		$resultado = $conexion->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}

	function creaCliente($conexion, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fonoContacto, $ingresoCliente){

		$insertInto = "INSERT INTO Clientes (rutCliente, nombreCliente, apellidoCliente, email, telefono, ingresoCliente)"
		$sql = $insertInto." VALUES ('"
				.$rutCliente."','"
				.$nombreCliente."','"
				.$apellidoCliente."','"
				.$email."',"
				.$fonoContacto.","
				.$ingresoCliente.");"
		$resultado = $conexion->query($sql);
		return $resultado;	
	}


	//Funciones Logicas

	function buscaSimulacion($conexion;$idCredito){
		$sql = "SELECT rutCliente FROM Simulaciones WHERE idCredito = '".$idCredito.";";

		$resultado = $conexion->query($sql);

		$datos = $resultado->fetch_assoc();

		return $datos;
	}

	function buscaCliente($conexion, $rutCliente) {
		$sql = "SELECT rutCliente FROM Clientes WHERE idCliente = '".$rutCliente.";";

		$resultado = $conexion->query($sql);

		$datos = $resultado->fetch_assoc();

		return $datos;
	}

	function actualizarDatosCliente ($conexion, $idCredito, $rutCliente){
		$clienteBD = buscaCliente($conexion,$rutCliente);
		$simulacionBD = buscaSimulacion($conexion, $idCredito);

		if ($clienteBD == $rutCliente && $simulacionBD = $idCredito){
			actualizaCliente($conexion, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fonoContacto, $ingresoCliente);
		}

		echo "No hay datos de la simulacion ingresada."

	}



?>