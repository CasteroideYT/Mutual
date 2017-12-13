<?php

$rutCliente = $_POST["rutCliente"];
$nombreCliente = $_POST["nombre"];
$apellidoCliente = $_POST["apellido"];
$sueldoCliente = $_POST["sueldoCliente"];
$montoSolicitado = $_POST["montoSolicitado"];
$cuotasCredito = $_POST["cuotasCredito"];
$interes = $_POST["interes"];
$email = $_POST["email"];

function recibeDatos(){

	if(isset($_POST["rutCliente"], $_POST["nombre"], $_POST["apellido"], $_POST["sueldoCliente"], $_POST["montoSolicitado"],
		$_POST["cuotasCredito"],$_POST["interes"], $_POST["email"];)) {
		return true;
}
	return false;
}


function validaRut($rutCliente){
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
	if(is_numeric($numero) && is_int($numero)){
		if($numero > 0){
			return true;
		}
		return false;
	}
	return false;
}

function validaCorreo($email){
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		return true;
	}
	return false;
}

function numeroCuotas($cuotasCredito){
	if(validaNumero($cuotasCredito)){
		if ($cuotasCredito >= 6 && $cuotasCredito <= 120 ) {
			return true;
		}
		return false;
	}
	return false
}

function interesPrestamo($interes){
	if(validaNumero($interes)){
		if ($cuotasCredito == 4) {
			return true;
		}
		return false;

		return false;
	}

	function validaIngreso ($sueldoCliente){
		if(validaNumero($montoSolicitado)){
			if($montoSolicitado > 149999){
				return true;
			}
			return false;
		}
		return false;
	}

	function valida




	?>