|<?php
	include "database.php";
	
	 
	// Funciones CRUD

	function creaCliente($conexionDB, $rutCliente, $nombreCliente, $apellidoCliente, $email){

		$insertInto = "INSERT INTO Clientes (rutCliente, nombreCliente, apellidoCliente, email)";
		$sql = $insertInto." VALUES ('"
				.$rutCliente."','"
				.$nombreCliente."','"
				.$apellidoCliente."','"
				.$email."');";
				
		$resultado = $conexionDB->query($sql);
		return $resultado;	
	}

	function crearSimulacion ($conexionDB, $ingresoMensual, $rutCliente,  $montoSolicitado, $numeroCuotas, $tasaInteres, $degravamen, $accidentes, $cesantia){
		$fecha=("Y-m-d");

		$insertInto = "INSERT INTO Simulaciones (ingresoMensual, montoSolicitado, numeroCutoas, tasaInteres, degravamen, accidentes, cesantia, fechaSimulacion, rutCliente)";
		$sql = $insertInto." VALUES ("
				.$ingresoMensual.","
				.$montoSolicitado.","
				.$numeroCuotas.","
				.$tasaInteres.","
				.$degravamen.","
				.$accidentes.","
				.$cesantia.",'2015-12-11','"
				.$rutCliente."');";
		$resultado = $conexionDB->query($sql);
		return $resultado;		
	}


	function actualizaCliente($conexionDB, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fonoContacto, $ingresoCliente) {
		$update = "UPDATE Clientes SET ";
		$sql = "nombreCliente = '".$nombreCliente."' "
				."apellidoCliente = '".$apellidoCliente."' "
				."email = '".$email."' ";
				
		$where = "where idCliente = '".$rutCliente."'";
		$resultado = $conexioDB->query($update.$sql.$where);
		return $resultado;
	}

	function todasSimulaciones($conexionDB, $idSimulacion) {
		$sql = "SELECT * FROM Simulaciones WHERE idsimulacion =".$idSimulacion;
		$resultado = $conexioDB->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}
	function borrarCredito($conexionDB, $idCredito) {
		$sql = "DELETE FROM Simulaciones WHERE idCredito = '".$idCredito."';";
		$resultado = $conexioDB->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}




	//Funciones Logicas

	function buscaSimulacion($conexionDB,$idCredito){
		$sql = "SELECT rutCliente FROM Simulaciones WHERE idCredito = '".$idCredito.";";

		$resultado = $conexionDB->query($sql);

		$datos = $resultado->fetch_assoc();

		return $datos;
	}

	function buscaCliente($conexionDB, $idCliente) {
		$sql = "SELECT rutCliente FROM Clientes WHERE idCliente = '".$idCliente.";";

		$resultado = $conexionDB->query($sql);

		$datos = $resultado->fetch_assoc();

		return $datos;
	}

	function actualizarDatosCliente ($conexionDB, $idCredito, $rutCliente){
		$clienteBD = buscaCliente($conexionDB,$rutCliente);
		$simulacionBD = buscaSimulacion($conexionDB, $idCredito);

		if ($clienteBD == $rutCliente && $simulacionBD = $idCredito){
			actualizaCliente($conexionDB, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fonoContacto, $ingresoCliente);
		}

		echo "No hay datos de la simulacion ingresada.";

	}



?>