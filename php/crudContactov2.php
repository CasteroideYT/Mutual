<?php

	include "database.php";

	


	// Funciones CRUD

	function creaContacto($conexionDB, $rutCliente, $mensajeConsulta) {
		$estadoContacto = "Enviado";
		$insertInto = "INSERT INTO Contactos (mensaje, estado, rutCliente)";
		$sql = $insertInto." VALUES ('"
				   .$mensajeConsulta."','"
				   .$estadoContacto."','"
				   .$rutCliente."');";
		$resultado = $conexionDB->query($sql);



		return $resultado;
	}

	function actualizaEstado($conexionDB, $idContacto, $estadoContacto) {
		$update = "UPDATE Contactos SET ".
		$sql = "estado = '".$estadoContacto."' ".
		$where = "where idContacto = ".$idContacto."";
		$resultado = $conexionDB->query($update.$sql.$where);
		return $resultado;
	}

	/*function verContactosTodos($idContacto, $conexion) {
		$sql = "SELECT * FROM Contactos where idcontacto =".$idContacto;
		$resultado = $conexion->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	} */

	function creaCliente($conexionDB, $rutCliente, $nombreCliente, $apellidoCliente, $email, $fonoContacto){

		$insertInto = "INSERT INTO Clientes (rutCliente, nombreCliente, apellidoCliente, email, telefono)";
		$sql = $insertInto." VALUES ('"
				.$rutCliente."','"
				.$nombreCliente."','"
				.$apellidoCliente."','"
				.$email."',"
				.$fonoContacto.");";
		$resultado = $conexionDB->query($sql);
		return $resultado;	
	}

	function verContacto($conexionDB,$idContacto){
		try{
			$accion = "SELECT * FROM contactos WHERE idContacto =";
			$sql = $accion ."". $idContacto;
		} catch (Exception $e){
			echo "puto bug";
		}
			if(!$resultado = $conexion->query($sql)){
				echo "Lo sentimos, este sitio web está experimentando problemas.";
				echo "Error: La ejecución de la consulta falló debido a: \n";
				echo "Query: " . $sql . "\n";
				echo "Errno: " . $conexionDB->errno . "\n";
				echo "Error: " . $conexionDB->error . "\n";
			}
			//Si es que no se revice valor
			if ($resultado->num_rows === 0) {
				echo "Lo sentimos. No se pudo encontrar una coincidencia para el ID $idContacto. Inténtelo de nuevo.";
			}

			$datos     = $resultado->fetch_assoc();
			?>
			<ul>
				<li>Mensaje: <?php echo $datos["mensaje"] ?></li>
				<li>Estado: <?php echo $datos["estado"] ?></li>
				<li>Id cliente: <?php echo $datos["idCliente"] ?></li>
			</ul>
<?php
	}

	function eliminaContacto ($conexionDB, $idContacto){
		$sql = "DELETE FROM Contactos WHERE idContacto = '".$idContacto."';";
		$resultado = $conexionDB->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}
?>