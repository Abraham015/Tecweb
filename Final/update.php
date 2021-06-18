<?php
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "proyecto";
	$var="Datos ingresados correctamente";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  	die("Connection failed: " . $conn->connect_error);
	}

	$bol=$_SESSION["bol"];
    $nom=$_SESSION["nom"];
    $apellido=$_SESSION["apellido"];
    $ape=$_SESSION["ape"];
    $fe=$_SESSION["fe"];
    $gen=$_SESSION["gen"];
    $curp=$_SESSION["curp"];
    $calle=$_SESSION["calle"];
    $colonia=$_SESSION["colonia"];
    $CP=$_SESSION["cp"];
    $cel=$_SESSION["cel"];
    $correo=$_SESSION["correo"];
    $procedencia=$_SESSION["proc"];
    $estado=$_SESSION["estado"];
    $promedio=$_SESSION["promedio"];
    $opcion=$_SESSION["opcion"];

	    $identidad="UPDATE identidad SET Boleta='$bol', Nombre='$nom', AP='$apellido', AM='$ape', fecha='$fe', Genero='$gen', CURP='$curp' WHERE Boleta = '$bol'";

	    $contacto="UPDATE Contacto SET Calle='$calle', Colonia='$colonia', CP='$CP', Celular='$cel', Correo='$correo' WHERE Boleta = '$bol'";

	    $pro="UPDATE Procedencia SET Escuela='$procedencia', Entidad='$estado', Promedio='$promedio', opcion='$opcion' WHERE Boleta = '$bol'";

	    if ($conn->query($identidad) === TRUE) {
	             //echo "New record created successfully";
	    } else {
	        echo "Error: " . $identidad . "<br>" . $conn->error;
	    }
	    if ($conn->query($contacto) === TRUE) {
	        //echo "New record created successfully";
	    } else {
	        echo "Error: " . $contacto . "<br>" . $conn->error;
	    }
	    if ($conn->query($pro) === TRUE) {
	        header('Location: paginadedatos.php');
	    } else {
	        echo "Error: " . $pro . "<br>" . $conn->error;
	    }
	/*$sql = "UPDATE personas SET nombre='$nombre', correo='$email', telefono='$telefono', estado_civil='$estado_civil', hijos='$hijos', intereses='$arrayIntereses' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);*/
	
?>

