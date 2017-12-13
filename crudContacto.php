<?php
	
	$dbhost = "localhost";
	$dbusuario = "cursos";
	$dbpassword = "1234";
	$db = "cursos";
	$conexion = new mysqli($dbhost, $dbusuario, $dbpassword, $db);

	$estadoContacto;
	global $ingresoCliente = 0;
	

	// Funciones CRUD

	function creaContacto($conexion, $rutCliente, $mensajeConsulta) {
		$insertInto = "INSERT INTO Contactos(mensaje, estado, rutCliente)"
		$sql = $insertInto." VALUES ("
				"'".$mensajeConsulta."',"
				"'Enviado',"
				"'".$rutCliente."');";
		$resultado = $conexion->query($sql);



		return $resultado;
	}

	function actualizaEstado($conexion, $idContacto, $estadoContacto) {
		$update = "UPDATE Contactos SET "
		$sql = "estado = '".$estadoContacto."' "
		$where = "where idContacto = ".$idContacto."";
		$resultado = $conexion->query($update.$sql.$where);
		return $resultado;
	}

	function verContactosTodos($conexion) {
		$sql = "SELECT * FROM Clientes Contactos";
		$resultado = $conexion->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}

	function creaCliente($conexion, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fonoContacto, $ingresoMensual){

		$insertInto = "INSERT INTO Clientes (rutCliente, nombreCliente, apellidoCliente, email, telefono, ingresoCliente)"
		$sql = $insertInto." VALUES ('"
				.$rutCliente."','"
				.$nombreCliente."','"
				.$apellidoCliente."','"
				.$email."',"
				.$fonoContacto.","
				.$ingresoMensual.");"
		$resultado = $conexion->query($sql);
		return $resultado;	
	}

	function verContacto($conexion;$idContacto){
		$sql = "SELECT * FROM Contactos WHERE idContacto = '".$idContacto.";";

		$resultado = $conexion->query($sql);

		$datos = $resultado->fetch_assoc();

		return $datos;
	}

	// Funciones lógica
	function buscaContacto($conexion;$idContacto){
		$sql = "SELECT rutCliente FROM Contactos WHERE idContacto = '".$idContacto.";";

		$resultado = $conexion->query($sql);

		$datos = $resultado->fetch_assoc();

		return $datos;
	}

	function buscaingresoCliente($conexion, $rutCliente) {
		$sql = "SELECT ingresoMensual FROM Clientes WHERE idCliente = '".$rutCliente.";";

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




?>