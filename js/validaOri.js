function validateForm() {
    var rutCLiente = document.forms["simuladorCredito"]["rutCLiente"].value;
    var sueldoCliente = document.forms["simuladorCredito"]["sueldoCliente"].value;d
    var montoSolicitado = document.forms["simuladorCredito"]["montoSolicitado"].value;
    var cuotasCredito = document.forms["simuladorCredito"]["cuotasCredito"].value;
    var interes = document.forms["simuladorCredito"]["interes"].value;
    var email = document.forms["simuladorCredito"]["email"].value;
    var seg_degravamen = document.forms["simuladorCredito"]["seg_degravamen"].value;
    var seg_accidentes = document.forms["simuladorCredito"]["seg_accidentes"].value;
    var seg_cesantia = document.forms["simuladorCredito"]["seg_cesantia"].value;


	
    return false;
}

function validarNumero (input){
    return  !isNaN(parseFloat(input)) && isFinite(input)

}

function validaEntero(input){
    var entero = input;

    if (parseInt(entero) == parseFloat(entero)){
        return true;
    }
        return false;
}

function validaRUT(rutCLiente){

}

function validaInteres(interes){
    valorInteres = interes;

        if (validarNumero(cuota) && validaEntero(cuota)){

        if(valorInteres == 4){
            return true;
        }

    return false;

}

function validaNumCuotas (cuotasCredito){

    cuota = cuotasCredito;

    if (validarNumero(cuota) && validaEntero(cuota)){

        if(cuota >= 6 && cuota <= 120){
            return true;
        }
            
    }
    return false;

}

function validaDinero (monto){

    dinero = monto;

    if (validarNumero(monto) && validaEntero(monto)){
            return true;
        }
            
    }
    return false;

}

function validaDegravamen (seg_degravamen){

}

function validaEmail (email){

    correo = email;

    correoRegEx = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

    if(correoRegEx.test(correo)){
        return true;
    }

    return false;

}