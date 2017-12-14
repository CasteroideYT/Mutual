<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simulador de credito</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/app.css">

</head>
<body>
<div class="contenedorDiv">
    <!-- Inicia Header -->
	<?php
	include "header.php"
	?>
    <!-- Termina Header -->
    <!-- Inicia navbar-->
	<?php
	include "navbar.php";
	?>
    <!--termina navbar-->
    <section>
        <div class="divForm">
            <h1>Simula tu credito</h1>
            <form action="enviado.php" method="post" name="simuladorCredito" onsubmit="return validaForm()">
                <fieldset class="divForm">
                    <legend>Datos Personales</legend>
                    <label>Rut</label>
                    <input type="text" placeholder="12.345.678-9" name="rutCliente">
                    <div class="tooltip" id="ttRut">
                        <span class="tooltip-mensaje" id="ttRutMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                    <br>
                    <label>Nombre</label>
                    <input name="nombre">
                    <div class="tooltip" id="ttNombre">
                        <span class="tooltip-mensaje" id="ttNombreMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                    <br>
                    <label>Apellido</label>
                    <input name="apellido">
                    <!-- Inicio del ToolTip -->
                    <div class="tooltip" id="ttApellido">
                        <span class="tooltip-mensaje" id="ttApellidoMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                    <!-- Fin del Tooltip -->
                    <br>
                    <label>Correo Electrónico</label>
                    <input name="email" type="email" placeholder="micorreo@dominio.com">
                    <div class="tooltip" id="ttEmail">
                        <span class="tooltip-mensaje" id="ttEmailMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                    <br>
                    <label>Ingreso Mensual</label>
                    <input type="number" name="sueldoCliente">
                    <div class="tooltip" id="ttIngreso">
                        <span class="tooltip-mensaje" id="ttIngresoMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                </fieldset>
                <div class="divseparadorForm"></div>
                <fieldset class="divForm">
                    <legend>Datos del credito</legend>
                    <label>Monto a solicitar</label>
                    <input type="number" placeholder="" name="montoSolicitado">
                    <div class="tooltip" id="ttMonto">
                        <span class="tooltip-mensaje" id="ttMontoMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                    <br>
                    <label>Numero de cuotas</label>
                    <input placeholder="" type="number" maxlength="3" max="120" min="6" name="cuotasCredito"> <label>Meses</label>
                    <div class="tooltip" id="ttCuotas">
                        <span class="tooltip-mensaje" id="ttCuotasMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                    <br>
                    <label>Tasa de interes</label>
                    <input type="text" value="4" name="interes" readonly><label>%</label>
                    <div class="tooltip" id="ttInteres">
                        <span class="tooltip-mensaje" id="ttInteresMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                    <br>
                    <label>Seguros Adicionales</label>
                    <input type="checkbox" name="seg_desgravamen" id="desgravamen" value="1" checked disabled>
                    <label for="desgravamen">Desgravamen</label>
                    <input type="checkbox" name="seg_accidentes" id="accidentes" value="1">
                    <label for="accidentes">Accidentes</label>
                    <input type="checkbox" name="seg_cesantia" id="cesantia" value="1">
                    <label for="cesantia">Cesantía</label>
                    <div class="tooltip" id="ttSeguros">
                        <span class="tooltip-mensaje" id="ttSegurosMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                </fieldset>
                <div class="divForm" style="text-align: center">
                    <input class="button" type="submit" value="CALCULAR">
                </div>
            </form>
        </div>
    </section>
    <?php
    include "aside.php";
    ?>
    <!-- inicia pie de pagina -->
	<?php

	include "piepagina.php"
	?>
    <!-- Termina pie de pagina -->
</div>
<?php

?>

<script type="text/javascript" src="./js/valida.js"></script>

</body>
</html>
