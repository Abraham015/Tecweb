<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "proyecto";
	$var="Datos ingresados correctamente";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset('utf8');
	// Check connection
	if ($conn->connect_error) {
	  	die("Connection failed: " . $conn->connect_error);
	}
	
	$bol = $_GET['Boleta'];
	
	//$sql =;
	$resultado = $conn->query( "DELETE FROM identidad WHERE Boleta = '$bol'");
	//$row = $resultado->fetch_assoc();

	$resultado1=$conn->query( "DELETE FROM Contacto WHERE Boleta = '$bol'");
	//$row1 = $resultado1->fetch_assoc();

	$resultado2=$conn->query( "DELETE FROM Procedencia WHERE Boleta = '$bol'");
	//$row2 = $resultado2->fetch_assoc();

	header('Location: paginadedatos.php');
	
?>

<html lang="es">
	<head>
		
	</head>
	<body>
	</body>
</html>
