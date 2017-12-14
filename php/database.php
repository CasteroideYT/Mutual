<?php
	$dbhost = "localhost";
	$dbusuario = "root";
	$dbpassword = "";
	$db = "mutual";
	$conexionDB =  new mysqli($dbhost, $dbusuario, $dbpassword, $db);
	if ($conexionDB ->connect_errno){
		echo "<h1>Lo sentimos, este sitio web está experimentando problemas.</h1>";
		echo "Error: Fallo al conectarse a MySQL debido a: \n";
		echo "Errno: " . $mysql->connect_errno . "\n";
		echo "Error: " . $mysql->connect_error . "\n";
	}
?>