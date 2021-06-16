<?php
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>.: Datos de Alumnos :. </title>
</head>
<body>
<h1>Datos de los alumnos</h1>
<table border="1" align="center">
	<tr>
		<td>Boleta</td>
		<td>Nombre</td>
		<td>Apellido Paterno</td>
		<td>Apellido Materno</td>
		<td>Horario</td>	
	</tr>
	<?php
		$sql="SELECT Boleta,Nombre,AP,AM FROM identidad";
		$result=mysqli_query($conn,$sql);
		while($mostrar=mysqli_fetch_array($result)) {
	?>
	<tr>
		<td><?php echo $mostrar['Boleta'] ?></td>
		<td><?php echo $mostrar['Nombre'] ?></td>
		<td><?php echo $mostrar['AP'] ?></td>
		<td><?php echo $mostrar['AM'] ?></td>
	</tr>
	<?php } ?>
</table>
</body>
</html>