<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mutual</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5, user-scalable=yes"/>
	<link rel="stylesheet" href="css/style.css">
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
	<section style="vertical-align: top;">
		<h2>SEGUROS DE VIDA</h2>
		<div>
			<img src="img/salud.jpg" style="width: 20% ; height: 10%; padding-left: 35px;">
			<div style="display: inline-block;  vertical-align: top;">
				<h3 style="text-align: left;  vertical-align: top;  ">AHORRO E INVERSIÓN</h3>
				<p>Seguros que fomentan el ahorro para cumplir tus metas</p>
				<ul style="text-align: top; width: 50%; ">
					<li>Mutual Inversión Segura</li>
					<li>Mutual Rentas Privadas</li>
					<li>Mutual Inversión SeguraMutual Ahorro Educación Superior</li>
				</ul>
			</div>
		</div>
		<div>
			<img src="img/salud.jpg" style="width: 20% ; height: 10%; padding-left: 35px;">
			<div style="display: inline-block;  vertical-align: top;">
				<h3 style="text-align: left;  vertical-align: top;  ">
					VIDA Y PROTECCIÓN
				</h3>
				<p>Seguros que fomentan el ahorro para cumplir tus metas</p>
				<ul style="text-align: top; width: 50%; ">
					<li>Mutual Inversión Segura</li>
					<li>Mutual Rentas Privadas</li>
					<li>Mutual Inversión SeguraMutual Ahorro Educación Superior</li>
				</ul>
			</div>
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
</body>
</html>