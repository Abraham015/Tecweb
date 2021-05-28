<?php
    session_start();
    
    //Se obtienen los valores de las variables de sesion
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

    $identidad = "INSERT INTO identidad (Boleta,Nombre,AP,AM,fecha,Genero,CURP)
    VALUES ($bol,'$nom','$apellido','$ape','$fe','$gen','$curp')";

    $contacto="INSERT INTO Contacto (Calle,Colonia,CP,Celular,Correo)
    VALUES ('$calle','$colonia',$CP,$cel,'$correo')";

    $pro="INSERT INTO Procedencia (Escuela,Entidad,Promedio,opcion)
    VALUES ('$procedencia','$estado',$promedio,'$opcion')";

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
        echo "New record created successfully";
    } else {
        echo "Error: " . $pro . "<br>" . $conn->error;
    }
       echo "<form method='POST' action='confirmaciondatos.php'>";
    $conn->close();
?>

