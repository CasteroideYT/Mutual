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
            <h1>Formulario de Contacto</h1>
            <form action="mostrarmensaje.php" method="post" name="formContacto" onsubmit="return validaFormContacto()">
                <fieldset class="divForm">
                    <legend>Datos Personales</legend>
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
                    <label>Telefono de Contacto</label>
                    <input type="text" name="fonoContacto" maxlength="9" minlength="9">
                    <div class="tooltip" id="ttFono">
                        <span class="tooltip-mensaje" id="ttFonoMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                    <br>
                    <label>Mensaje</label>
                    <br>
                    <textarea name="mensajeConsulta" cols="50" rows="10" MAXLENGTH="500" minlength="5"></textarea>
                    <br>
                    <div class="tooltip" id="ttMensaje">
                        <span class="tooltip-mensaje" id="ttMensajeMensaje">
                            Si lees esto, quiere decir que algo salio mal!
                        </span>
                    </div>
                </fieldset>
                <div class="divForm" style="text-align: center">
                    <input class="button" type="submit" value="ENVIAR">
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