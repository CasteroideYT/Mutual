<?php
	
	$dbhost = "localhost";
	$dbusuario = "cursos";
	$dbpassword = "1234";
	$db = "cursos";
	$conexion = new mysqli($dbhost, $dbusuario, $dbpassword, $db);

	function create($conexion, $codigo, $nombre, $descripcion, $annyo, $semestre) {
		$insertInto = "INSERT INTO cursos(codigo, nombre, descripcion, annyo, semestre)"
		$sql = $insertInto." VALUES ("
				"'".$codigo."',"
				"'".$nombre."',"
				"'".$descripcion."',"
				.$annyo.","
				.$semestre.");";
		$resultado = $conexion->query($sql);
		return $resultado;
	}

	function update($conexion, $codigo, $nombre, $descripcion, $annyo, $semestre) {
		$update = "UPDATE CURSOS SET "
		$sql = "nombre = '".$nombre."' "
				."descripcion = '".$descripcion."' "
				."annyo = ".$annyo." "
				."semestre = ".$semestre." ";
		$where = "where codigo = '".$codigo."'";
		$resultado = $conexion->query($update.$sql.$where);
		return $resultado;
	}

	function readAll($conexion) {
		$sql = "SELECT * FROM CURSOS";
		$resultado = $conexion->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}

	function readOne($conexion, $codigo) {
		$sql = "SELECT * FROM CURSOS WHERE CODIGO = '".$codigo."';";
		$resultado = $conexion->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}

	function delete($conexion, $codigo) {
		$sql = "DELETE FROM CURSOS WHERE CODIGO = '".$codigo."';";
		$resultado = $conexion->query($sql);
		$datos = $resultado->fetch_assoc();
		return $datos;
	}
?>