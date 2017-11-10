<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mutual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5, user-scalable=yes"/>
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
        <div>
            <h2>Ultimas noticias</h2>
            <div>
                <h3>Aqui iria una noticia</h3>
                <p>Nosotros podriamos agregar noticias :D </p>
                <a>Leer</a>
            </div>
            <div>
                <h3>Aqui iria una noticia</h3>
                <p>Nosotros podriamos agregar noticias :D </p>
                <a>Leer</a>
            </div>
            <div>
                <h3>Aqui iria una noticia</h3>
                <p>Nosotros podriamos agregar noticias :D </p>
                <a>Leer</a>
            </div>
        </div>
        <div>
            <h2>Seguros</h2>
            <p>Mutual Inversión Segura</p>
            <p>Mutual Rentas Privadas</p>
            <p>Mutual Inversión SeguraMutual Ahorro Educación Superior</p>
            <a href="seguros.php">Mas información</a>
        </div>
    </section>
    <aside style="vertical-align: top;">
        <iframe src="css/login.html" frameborder="0" scrolling="no" height="382" width="310" title="Login"></iframe>
        <img src="img/oferta.jpg" style="align-content: center; height: 190px; width: 190px">
        <table style="text-align: center; min-width: 190px;">
            <tr>
                <td style="text-align: center; min-width: 190px;"> <a href="#">Oferta 01 </a> </td>
            </tr>

            <tr>
                <td style="text-align: center; min-width: 190px;"> <a href="#">Oferta 01 </a> </td>
            </tr>

            <tr>
                <td style="text-align: center; min-width: 190px;"> <a href="#">Oferta 01 </a> </td>
            </tr>
        </table>
    </aside>
    <!-- inicia pie de pagina -->
	<?php

	include "piepagina.php"
	?>
    <!-- Termina pie de pagina -->
</div>
</body>
</html>