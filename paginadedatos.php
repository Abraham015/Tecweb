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
  <link rel="stylesheet" type="text/css" href="style25.css">
</head>
<body class="datos">
<div id="tabla-container">
	<table>
		<thead>
			<tr><td colspan="8" align="center"><h2>Datos de Alumnos</h2></td></tr>
		</thead>
		<thead>
			<tr>
				<th colspan="4" align="center"><a href="registroalumno.html"><button class="botones">Crear nuevo registro</button></a></th>
				<th colspan="4" align="center"><a href="cerrarsesion.php"><button class="botones">Cerrar Sesión</button></th>
			</tr>
		</thead>
		<thead>
			<tr>
				<th>Boleta</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Horario</th>
				<th>Editar Datos</th>
				<th>Obtener PDF</th>	
				<th>Eliminar Registro</th>
			</tr>
		</thead>
		<?php
			$sql="SELECT Boleta,Nombre,AP,AM,horario FROM identidad, examen WHERE identidad.Boleta=examen.Boletaex";
			$result=mysqli_query($conn,$sql);
			/*$sql2="SELECT horario FROM examen";
			$result2=mysqli_query($conn,$sql2);*/
			while($mostrar=mysqli_fetch_array($result)) {
		?>
		<tr>
			<td><?php echo $mostrar['Boleta'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['AP'] ?></td>
			<td><?php echo $mostrar['AM'] ?></td>
			<td><?php echo $mostrar['horario'] ?></td>
			<td><a href="modificar.php?Boleta=<?php echo $mostrar['Boleta']; ?>"><button class="modificar"/><img src="images/lapiz.png"></button></a></td>
			<td><a href="Recuperarpdf.php?Boleta=<?php echo $mostrar['Boleta']; ?>"><button class="modificar"/><img src="images/pdf.png"></button></a></td>
			<td><a href="eliminar.php?Boleta=<?php echo $mostrar['Boleta']; ?>"><button class="modificar"/><img src="images/basura.png"></button></a></td>
		</tr>
		<?php } ?>
	</table>
</div>
</body>
</html>