<?php

$rutCliente = $_POST["rutCliente"];
$nombreCliente = $_POST["nombre"];
$apellidoCliente = $_POST["apellido"];
$fonoContacto = $_POST["fonoContacto"];
$email = $_POST["email"];
$mensajeConsulta = $_POST["mensajeConsulta"];

function datosContacto(){
	// Valida que se recibiento todos los campos
	if(isset($_POST["rutCliente"], $_POST["nombre"], $_POST["apellido"],
		$_POST["mensajeConsulta"], $_POST["email"])) {
		return true;
	}
	return false;
}

function validaRut($rutCliente){
	$suma = 0;
	// Valida que el rut sea valido
	if(strpos($rutCliente,"-")==false){
		$RUT[0] = substr($rutCliente, 0, -1);
		$RUT[1] = substr($rutCliente, -1);
	}else{
		$RUT = explode("-", trim($rutCliente));
	}
	$elRut = str_replace(".", "", trim($RUT[0]));
	$factor = 2;
	for($i = strlen($elRut)-1; $i >= 0; $i--):
		$factor = $factor > 7 ? 2 : $factor;
	$suma += $elRut{$i}*$factor++;
	endfor;
	$resto = $suma % 11;
	$dv = 11 - $resto;
	if($dv == 11){
		$dv=0;
	}else if($dv == 10){
		$dv="k";
	}else{
		$dv=$dv;
	}
	if($dv == trim(strtolower($RUT[1]))){
		return true;
	}else{
		return false;
	}
}

function validaNumero($numero){
	// Valida que el campo se un numero entero
	if(is_numeric($numero) && is_int($numero)){
		if($numero > 0){
			return true;
		}
		return false;
	}
	return false;
}

function validaCorreo($email){
	//valida que la informacion sea un email
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		return true;
	}
	return false;
}

function validaNoVacio ($input) {
	//Valida que no este vacio el campo requiere variable a usar
	$input = trim($input);

	if($input == "") {
		return false;
	}

		return true;
}

function validaSoloTexto ($varTexto) {
	//Valida que el campo solo sean letras requiere variable a usar
	if (validaNoVacio($varTexto)){
		
		if (preg_match("^[a-zA-Z\-]",$varTexto)){
			return true;
		}

		return false;
	}

	return false;
}

function validaMensaje ($mensajeConsulta){
	if (validaNoVacio($mensajeConsulta)){
		if (strlen($mensajeConsulta)>8 && strlen($mensajeConsulta)<501) {
			return true;
		}
		return false;
	}
	return false;
}

function validaFono ($fonoContacto) {
	// Valida el numero de telefono
	if (validaNumero($fonoContacto)){
		if (preg_match("^[2|345679][0-9]{8}$", $fonoContacto)){
			return true;
		}
		return false;
	}
	return false;
}

	?>

