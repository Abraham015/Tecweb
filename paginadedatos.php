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
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body class="datos">
<div id="tabla-container">
	<table>
		<thead>
			<tr><td colspan="7" align="center"><h2>Datos de Alumnos</h2></td></tr>
		</thead>
		<thead>
			<tr>
				<th>Boleta</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Horario</th>
				<th></th>
				<th></th>	
			</tr>
		</thead>
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
			<td></td>
			<td><a href="modificar.php?Boleta=<?php echo $mostrar['Boleta']; ?>"><button class="modificar"/><img src="images/lapiz.png"></button></a></td>
			<td><a href="eliminar.php?Boleta=<?php echo $mostrar['Boleta']; ?>"><button class="modificar"/><img src="images/basura.png"></button></a></td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>