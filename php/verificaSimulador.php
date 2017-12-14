<?php
if (datosSimulacion()){

}



function datosSimulacion() {
	// Valida que se recibiento todos los campos
	if ( isset( $_POST["rutCliente"], $_POST["nombre"], $_POST["apellido"], $_POST["sueldoCliente"],
		$_POST["montoSolicitado"], $_POST["cuotasCredito"], $_POST["interes"], $_POST["email"] ) ) {
		return true;
	} else {
		return false;
	}
}

function validaRut( $rutCliente ) {
	// Valida que el rut sea valido
	if ( strpos( $rutCliente, "-" ) == false ) {
		$RUT[0] = substr( $rutCliente, 0, - 1 );
		$RUT[1] = substr( $rutCliente, - 1 );
	} else {
		$RUT = explode( "-", trim( $rutCliente ) );
	}
	$elRut  = str_replace( ".", "", trim( $RUT[0] ) );
	$factor = 2;
	for ( $i = strlen( $elRut ) - 1; $i >= 0; $i -- ):
		$factor = $factor > 7 ? 2 : $factor;
		$suma   = 0;
		$suma   += $elRut{$i} * $factor ++;
	endfor;
	$resto = $suma % 11;
	$dv    = 11 - $resto;
	if ( $dv == 11 ) {
		$dv = 0;
	} else if ( $dv == 10 ) {
		$dv = "k";
	} else {
		$dv = $dv;
	}
	if ( $dv == trim( strtolower( $RUT[1] ) ) ) {
		return true;
	} else {
		return false;
	}
}

function validaNumero( $numero ) {
	// Valida que el campo se un numero entero
	if ( is_numeric( $numero ) && is_int( $numero ) ) {
		if ( $numero > 0 ) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function validaCorreo( $email ) {
	//valida que la informacion sea un email
	if ( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
		return true;
	} else {
		return false;
	}
}

function numeroCuotas( $cuotasCredito ) {
	// Valida un minimo y un maximo de cuotas
	if ( validaNumero( $cuotasCredito ) ) {
		if ( $cuotasCredito >= 6 && $cuotasCredito <= 120 ) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function interesPrestamo( $interes ) {
	// Valida el interes del prestamo
	if ( validaNumero( $interes ) ) {
		if ( $interes == 4 ) {
			return true;
		} else {
			return false;
		}
	} else {
		return false;
	}
}

function validaIngreso( $sueldoCliente ) {
	//Valida que el sueldo cliente cumpla con el minimo
	if ( validaNumero( $sueldoCliente ) ) {
		if ( $sueldoCliente > 149999 ) {
			return true;
		}

		return false;
	}

	return false;
}

function validaNoVacio( $input ) {
	//Valida que no este vacio el campo
	$input = trim( $input );

	if ( $input == "" ) {
		return false;
	}

	return true;
}

function validaMontoSolicitado( $montoSolicitado ) {
	//Valida que el monto tenga un minino
	if ( validaNumero( $montoSolicitado ) ) {
		if ( $montoSolicitado < 500000 ) {
			return true;
		}

		return false;
	}

	return false;
}

function validaSoloTexto( $varTexto ) {
	//Valida que el campo solo sean letras
	if ( ereg( "^[a-zA-Z\-]", $varTexto ) ) {
		return true;
	} else {
		return false;
	}
}
	?>