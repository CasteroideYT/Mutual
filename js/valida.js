function validaForm() {
    var rutCliente = document.forms["simuladorCredito"]["rutCliente"].value;
    var nombreCliente = document.forms["simuladorCredito"]["nombre"].value;
    var apellidoCliente = document.forms["simuladorCredito"]["apellido"].value;
    var sueldoCliente = document.forms["simuladorCredito"]["sueldoCliente"].value;
    var montoSolicitado = document.forms["simuladorCredito"]["montoSolicitado"].value;
    var cuotasCredito = document.forms["simuladorCredito"]["cuotasCredito"].value;
    var interes = document.forms["simuladorCredito"]["interes"].value;
    var email = document.forms["simuladorCredito"]["email"].value;
    var seg_desgravamen = document.forms["simuladorCredito"]["seg_desgravamen"].checked;

    if(
    validaRut(rutCliente)== true &&
    validaNombre(nombreCliente) == true &&
    validaApellido(apellidoCliente) == true&&
    validaEmail(email)== true &&
    validaIngreso(sueldoCliente)== true&&
    validaMonto(montoSolicitado)== true&&
    validaNumCuotas(cuotasCredito)== true&&
    validaInteres(interes)== true &&
    validaDesgravamen(seg_desgravamen)== true){
        return true;
    }
        return false;
}

function validaFormContacto() {
    var rutCliente = document.forms["formContacto"]["rutCliente"].value;
    var nombreContacto = document.forms["formContacto"]["nombre"].value;
    var apellidoContacto = document.forms["formContacto"]["apellido"].value;
    var fonoContacto = document.forms["formContacto"]["fonoContacto"].value;
    var emailContacto = document.forms["formContacto"]["email"].value;
    var mensajeConsulta = document.forms["formContacto"]["mensajeConsulta"].value;

    if(
    validaRut(rutCliente)&&
    validaNombre(nombreContacto) &&
    validaApellido(apellidoContacto) &&
    validaEmail(emailContacto) &&
    validaFono(fonoContacto) &&
    validaMensaje(mensajeConsulta)
        ){
        return true;
    }
        return false;
}

function validaIngreso(ingreso) {
    if (!validaCampoVacio(ingreso)) {
        document.getElementById("ttIngresoMensaje").innerHTML = "No debe estar vacio";
        mostarTooltip("ttIngreso");
        return false;
    } else if (!validaDinero(ingreso)) {
        document.getElementById("ttIngresoMensaje").innerHTML = "Ingreso invalido";
        mostarTooltip("ttIngreso");
        return false;
    } else if (ingreso < 150000) {
        document.getElementById("ttIngresoMensaje").innerHTML = "El ingreso debe ser mayor";
        mostarTooltip("ttIngreso");
        return false;
    } else {
        ocutarTooltip("ttIngreso");
        return true;
    }
}

function validaMonto(monto) {
    if (!validaCampoVacio(monto)) {
        document.getElementById("ttMontoMensaje").innerHTML = "No debe estar vacio";
        mostarTooltip("ttMonto");
        return false;
    } else if (!validaDinero(monto)) {
        document.getElementById("ttMontoMensaje").innerHTML = "Ingreso invalido";
        mostarTooltip("ttMonto");
        return false;
    } else if (monto < 500000) {
        document.getElementById("ttMontoMensaje").innerHTML = "El credio debe ser mayor a $500.000";
        mostarTooltip("ttMonto");
        return false;
    } else {
        ocutarTooltip("ttMonto");
        return true;
    }
}

function validarNumero(input) {
    return !isNaN(parseFloat(input)) && isFinite(input)

}

function validaEntero(input) {
    var entero = input;

    if (parseInt(entero) == parseFloat(entero)) {
        return true;
    }
    return false;
}

function validaInteres(interes) {
    valorInteres = interes;

    if (validaCampoVacio(valorInteres)) {
        if (valorInteres == 4) {
            ocutarTooltip("ttInteres");
            return true;
        }
        document.getElementById("ttInteresMensaje").innerHTML = "El interes fue modificado";
        mostarTooltip("ttInteres");
        return false;
    }

}

function validaNumCuotas(cuotasCredito) {
    cuota = cuotasCredito;

    if (validaCampoVacio(cuota)) {
        if (validarNumero(cuota) && validaEntero(cuota)) {
            if (cuota >= 6 && cuota <= 120) {
                ocutarTooltip("ttCuotas")
                return true;
            } else {
                document.getElementById("ttCuotasMensaje").innerHTML = "Las cuotas desde estar entre 6 y 120";
                mostarTooltip("ttCuotas");
                return false;
            }
        } else {
            document.getElementById("ttCuotasMensaje").innerHTML = "El ingreso es incorrecto";
            mostarTooltip("ttCuotas");
            return false;
        }
    } else {
        document.getElementById("ttCuotasMensaje").innerHTML = "El ingreso esta vacio";
        mostarTooltip("ttCuotas");
        return false;
    }
}

function validaDinero(monto) {
    
    if (validarNumero(monto) && validaEntero(monto)) {
        return true;
    }

    return false;

}

function validaDesgravamen(seg_desgravamen) {

    desgravemen = seg_desgravamen;

    if (desgravemen == true) {
        return true;
    }else {
        document.getElementById("ttSegurosMensaje").innerHTML = "Desgravamen es obligatorio";
        mostarTooltip("ttSeguros");
        return false;
    }

}

function validaEmail(email) {
    correo = email;
    if (validaCampoVacio(correo)) {
        correoRegEx = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        if (correoRegEx.test(correo)) {
            ocutarTooltip("ttEmail");
            return true;
        } else {
            document.getElementById("ttEmailMensaje").innerHTML = "El correo es incorrecto";
            mostarTooltip("ttEmail");
            return false;
        }
    } else {
        document.getElementById("ttEmailMensaje").innerHTML = "El correo esta vacio";
        mostarTooltip("ttEmail");
        return false;
    }
}

function validaRut(rut) {
    var rexp = new RegExp(/^([0-9])+\-([kK0-9])+$/);
    
    if (rut.match(rexp)) {
        var RUT = rut.split("-");
        var elRut = RUT[0].split('');
        var factor = 2;
        var suma = 0;
        var dv;
        for (i = (elRut.length - 1); i >= 0; i--) {
            factor = factor > 7 ? 2 : factor;
            suma += parseInt(elRut[i]) * parseInt(factor++);
        }
        dv = 11 - (suma % 11);
        if (dv == 11) {
            dv = 0;
        } else if (dv == 10) {
            dv = "k";
        }

        if (dv == RUT[1].toLowerCase()) {
            ocutarTooltip("ttRut");
            return true;
        } else {
            document.getElementById("ttRutMensaje").innerHTML = "El rut es incorrecto";
            mostarTooltip("ttRut");
            return false;
        }
    } else {
        document.getElementById("ttRutMensaje").innerHTML = "El rut es incorrecto";
        mostarTooltip("ttRut");
        return false;
    }
}

function validaCampoVacio(input) {
    campo = input;

    if (campo.length == 0) {
        return false;
    } else {
        return true;
    }
}

function validaNombre(nombre) {
    if (!validaCampoVacio(nombre)) {
        document.getElementById("ttNombreMensaje").innerHTML = "El nombre esta vacio";
        mostarTooltip("ttNombre");
        return false;
    } else if (!validaTexto(nombre)) {
        document.getElementById("ttNombreMensaje").innerHTML = "El nombre debe ser solo letras";
        mostarTooltip("ttNombre");
        return false;
    } else {
        ocutarTooltip("ttNombre");
        return true;
    }

}

function validaApellido(apellido) {
    if (!validaCampoVacio(apellido)) {
        document.getElementById("ttApellidoMensaje").innerHTML = "El apellido esta vacio";
        mostarTooltip("ttApellido");
        return false;
    } else if (!validaTexto(apellido)) {
        document.getElementById("ttApellidoMensaje").innerHTML = "El apellido debe ser solo letras";
        mostarTooltip("ttApellido");
        return false;
    } else {
        ocutarTooltip("ttApellido");
        return true;
    }
}

function validaTexto(texto) {
    var correcto = true;
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    for (var i = 0; i < texto.length; i++) {
        if (letras.indexOf(texto.charAt(i)) == -1) {
            correcto = false;
        }
    }
    return correcto


}

function mostarTooltip(id) {
    document.getElementById(id).style.display = "inline-block";
}

function ocutarTooltip(id) {
    document.getElementById(id).style.display = "none"

}

function validaFono(fono){
    var rexpFono = new RegExp(/^[2|345679][0-9]{8}$/);

        if (!validaCampoVacio(fono)) {
            document.getElementById("ttFonoMensaje").innerHTML = "Ingrese numero telefónico";
            mostarTooltip("ttFono");
            return false;
        } else if (!fono.match(rexpFono)) {
            document.getElementById("ttFonoMensaje").innerHTML = "No es numero telefonico de Chile";
            mostarTooltip("ttFono");
            return false;
        } else {
            ocutarTooltip("ttFono");
            return true;
        }


}

function validaMensaje(mensaje){
    
    if (!validaCampoVacio(mensaje)) {
            document.getElementById("ttMensajeMensaje").innerHTML = "Debe ingresar texto en su mensaje";
            mostarTooltip("ttMensaje");
            return false;
    } else if(!(mensaje.length >9 && mensaje.length < 501)){
        document.getElementById("ttMensajeMensaje").innerHTML = "Debe de escribir al menos 10 caracteres";
        mostarTooltip("ttMensaje");
    }else {
        ocutarTooltip("ttMensaje");
        return true;
    }
}

/*function validaRut2(b){

    if(b.match(/^([0-9])+\-([kK0-9])+$/)){

        b=b.split("-");

    var a=b[0].split(""),c=2,d=0;

    for(i=a.length-1;0<=i;i--)
        c=7<c?2:c,d+=parseInt(a[i])*parseInt(c++);

        a=11-d%11;return(11==a?0:10==a?"k":a)==b[1].toLowerCase()}

    return!1}*/