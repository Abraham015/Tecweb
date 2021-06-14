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

//recepción de datos enviados mediante POST desde ajax
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$clave= (isset($_POST['clave'])) ? $_POST['clave'] : '';

//$pass = md5($password); //encripto la clave enviada por el usuario para compararla con la clava encriptada y almacenada en la BD

$query=mysql_query($conn,"SELECT * FROM administrador WHERE usuario='".$usuario."' AND clave='".$clave."'");
$nr=mysql_num_rows($query);

/*$usu="SELECT * FROM administrador WHERE usuario='$usuario'";
$contra="SELECT * FROM administrador WHERE pass='$passwoord'";9*/


if($nr==1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["s_usuario"] = $usuario;
}else{
    $_SESSION["s_usuario"] = null;
    $data=null;
}

print json_encode($data);
$conn=null;

//usuarios de pruebaen la base de datos
//usuario:admin pass:12345
//usuario:demo pass:demo
?>
