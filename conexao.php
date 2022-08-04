<?php 
	$server = "localhost";
	$user = "root";
	$password = "";
	$bd = "telefone";
	
	if ( $conn = mysqli_connect($server, $user, $password, $bd) ) {
		//echo "Conectado";
	} else
		echo "ERROR";
	 	
 ?>