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
	$resultado = $conn->query( "SELECT * FROM identidad WHERE Boleta = '$bol'");
	$row = $resultado->fetch_assoc();

	$resultado1=$conn->query( "SELECT * FROM Contacto WHERE Boleta = '$bol'");
	$row1 = $resultado1->fetch_assoc();

	$resultado2=$conn->query( "SELECT * FROM Procedencia WHERE Boleta = '$bol'");
	$row2 = $resultado2->fetch_assoc();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.:Modificaci&oacute;n Datos Generales:. </title>
    <link rel="stylesheet" href="EstiloFormulario.css">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>

</head>
<body>
    <table align="center">
      <tr>
        <td><img src="images/Blanco.png" width="200px" height="150px"></td>
        <td><h1 align="center">&nbsp;&nbsp;.: Modificaci&oacute;n Datos :.</h1>
    <p>Alumnos de Nuevo Ingreso
    <br>(Agosto 2021)</p></td>
    <td><img src="images/blanco1.png"></td>
      </tr>
    </table>
<div class="container">
    <div class="wrapper">
      <ul class="steps">
        <li class="is-active">Registro</li>
      </ul>
      <form class="form-wrapper" method="POST" action="datos.php"name="formulario" id="formulario">
    <fieldset class="section is-active">      
    <h2>Identidad</h2><hr>
    <table align="center">
            <tr>
                <td>No. de boleta:<input type="text" id="boleta" value="<?php echo $row['Boleta']; ?>" name="boleta" size="10" maxlength="10" required /></td>
            </tr>
            <tr>
                <td>Nombre(s):<input type="text" id="nombre" value="<?php echo $row['Nombre']; ?>" name="nombre" size="30" maxlength="30" required /></td>
            </tr>
            <tr>
                <td>Apellido Paterno:<input type="text" id="apaterno" value="<?php echo $row['AP']; ?>" name="apaterno" size="30" maxlength="30" required /></td>
            </tr>
            <tr>
                <td>Apellido Materno:<input type="text" id="amaterno" value="<?php echo $row['AM']; ?>" name="amaterno"size="30" maxlength="30" required /></td>
            </tr>
            <tr>
                <td>Fecha de nacimiento:<br><input type="date" id="fecha" name="fecha" value="<?php echo $row['fecha']; ?>" size="10" maxlength="15" min="1900-01-01" required /></td>
            </tr>
            <tr>
                <td align="center">G&eacute;nero:<br><br>
                  Masculino<br><input type="radio" name="mf" value="m" <?php if($row['Genero']=='Masculino') echo "checked=\"checked\" " ?> required><br>
                  Femenino<br><input type="radio" name="mf" value="f" <?php if($row['Genero']=='Femenino') echo "checked=\"checked\" " ?> required></td>
            </tr>
            <tr>
                <td>CURP:<br><input type="alphanumeric" name="curp" id="curp" value="<?php echo $row['CURP']; ?>" "size="18" maxlength="18" required /></td>
            </tr>
            </table>
        <hr><h2>Contacto</h2><hr>
        <table align="center">
            <tr>
              <td>Calle y N&uacutemero: <input type="text" name="calle" id="calle" value="<?php echo $row1['Calle']; ?>" required></td>
            </tr>
            <tr>
              <td>Colonia: <input type="text" name="colonia" id="colonia" value="<?php echo $row1['Colonia']; ?>" required></td> 
            </tr>
            <tr>
              <td>C&oacutedigo Postal: <br> <input type="number" name="CP" id="CP" value="<?php echo $row1['CP']; ?>" maxlength="5" required></td>
            </tr>
            <tr>
              <td>Tel&eacutefono o celular: <br><input type="number" name="cel" id="cel" value="<?php echo $row1['Celular']; ?>" required></td>
            </tr>
            <tr>
              <td>Correo Electr&oacutenico: <input type="text" name="correo" id="correo" value="<?php echo $row1['Correo']; ?>" required></td>
            </tr>
        </table>
         <hr><h2>Procedencia :</h2><hr>
		        <table align="center">
		            <tr>
		            	<td>Escuela de Procedencia:<select name="Procedencia" required>
		                  <option value="default">Escoge una opci&oacuten</option>
		                  <option value="1" <?php if($row2['Escuela']=='CECyT #1 Gonzalo Vazquez Vela') echo 'selected'; ?> >CECyT #1 "Gonzalo V&aacutezquez Vela"</option>
		                  <option value="2" <?php if($row2['Escuela']=='CECyT #2 Miguel Bernard') echo 'selected'; ?> >CECyT #2 "Miguel Bernard"</option>
		                  <option value="3" <?php if($row2['Escuela']=='CECyT #3 Estanislao Ramirez Ruiz') echo 'selected'; ?> >CECyT #3 "Estanislao Ram&iacuterez Ruiz"</option>
		                  <option value="4" <?php if($row2['Escuela']=='CECyT #4 Lazaro Cardenas') echo 'selected'; ?> >CECyT #4 "L&aacutezaro Cardenas"</option>
		                  <option value="5" <?php if($row2['Escuela']=='CECyT #5 Benito Juarez Garcia') echo 'selected'; ?> >CECyT #5 "Benito Ju&aacuterez Garc&iacutea"</option>
		                  <option value="6" <?php if($row2['Escuela']=='CECyT #6 Miguel Othon de Mendizabal') echo 'selected'; ?> >CECyT #6 "Miguel Oht&oacuten de Mendizabal"</option>
		                  <option value="7" <?php if($row2['Escuela']=='CECyT #7 Cuauhtemoc') echo 'selected'; ?> >CECyT #7 "Cuauht&eacutemoc"</option>
		                  <option value="8" <?php if($row2['Escuela']=='CECyT #8 Narciso Bassols Garcia') echo 'selected'; ?> >CECyT #8 "Narciso Bassols Garc&iacutea"</option>
		                  <option value="9" <?php if($row2['Escuela']=='CECyT #9 Juan de Dios Batiz') echo 'selected'; ?> >CECyT #9 "Juan de Dios B&aacutetiz"</option>
		                  <option value="10" <?php if($row2['Escuela']=='CECyT #10 Carlos Vallejo Marquez') echo 'selected'; ?> >CECyT #10 "Carlos Vallejo M&aacuterquez"</option>
		                  <option value="11" <?php if($row2['Escuela']=='CECyT #11 Wilfrido Massieu Perez') echo 'selected'; ?> >CECyT #11 "Wilfrido Massieu P&eacuterez"</option>
		                  <option value="12" <?php if($row2['Escuela']=='CECyT #12 Jose Maria Morelos y Pavon') echo 'selected'; ?> >CECyT #12 "Jos&eacute Mar&iacutea Morelos y Pav&oacuten"</option>
		                  <option value="13" <?php if($row2['Escuela']=='CECyT #13 Ricardo Flores Magon') echo 'selected'; ?> >CECyT #13 "Ricardo Flores Mag&oacuten"</option>
		                  <option value="14" <?php if($row2['Escuela']=='CECyT #14 Luis Enrique Erro') echo 'selected'; ?> >CECyT #14 "Luis Enrique Erro"</option>
		                  <option value="15" <?php if($row2['Escuela']=='CECyT #15 Diodoro Antunez Echegaray') echo 'selected'; ?> >CECyT #15 "Di&oacutedoro Ant&uacutenez Echegaray"</option>
		                  <option value="16" <?php if($row2['Escuela']=='CECyT #16 Hidalgo') echo 'selected'; ?> >CECyT #16 "Hidalgo"</option>
		                  <option value="17" <?php if($row2['Escuela']=='CECyT #17 Leon-Guanajuato') echo 'selected'; ?> >CECyT #17 "Le&oacuten-Guanajuato"</option>
		                  <option value="18" <?php if($row2['Escuela']=='CECyT #18 Zacatecas') echo 'selected'; ?> >CECyT #18 "Zacatecas"</option>
		                  <option value="C1" <?php if($row2['Escuela']=='CET #1 Walter Cross Buchanan') echo 'selected'; ?> >CET #1 "Walter Cross Buchanan"</option>
		                </select>
		                </td>
		            </tr>
		            <tr>
		            	<td>Entidad Federativa de Procedencia:<select name="Estado" required>
		                  <option value="default">Escoge una opci&oacuten</option>
		                  <option value="Agua" <?php if($row2['Entidad']=='Aguascalientes') echo 'selected'; ?> >Aguascalientes</option>
		                  <option value="Baja" <?php if($row2['Entidad']=='Baja California') echo 'selected'; ?> >Baja California</option>
		                  <option value="BajaS" <?php if($row2['Entidad']=='Baja California Sur') echo 'selected'; ?> >Baja California Sur</option>
		                  <option value="Cam" <?php if($row2['Entidad']=='Campeche') echo 'selected'; ?> >Campeche</option>
		                  <option value="Coa" <?php if($row2['Entidad']=='Coahuila') echo 'selected'; ?> >Coahuila</option>
		                  <option value="Col" <?php if($row2['Entidad']=='Colima') echo 'selected'; ?> >Colima</option>
		                  <option value="Chia" <?php if($row2['Entidad']=='Chiapas') echo 'selected'; ?> >Chiapas</option>
		                  <option value="Chi" <?php if($row2['Entidad']=='Chihuahua') echo 'selected'; ?> >Chihuahua</option>
		                  <option value="DF" <?php if($row2['Entidad']=='Ciudad de México') echo 'selected'; ?> >Ciudad de M&eacutexico</option>
		                  <option value="Du" <?php if($row2['Entidad']=='Durango') echo 'selected'; ?> >Durango</option>
		                  <option value="EM" <?php if($row2['Entidad']=='Estado de México') echo 'selected'; ?> >Estado de M&eacutexico</option>
		                  <option value="Gua" <?php if($row2['Entidad']=='Guanajuato') echo 'selected'; ?> >Guanajuato</option>
		                  <option value="Gue" <?php if($row2['Entidad']=='Guerrero') echo 'selected'; ?> >Guerrero</option>
		                  <option value="Hid" <?php if($row2['Entidad']=='Hidalgo') echo 'selected'; ?> >Hidalgo</option>
		                  <option value="Ja" <?php if($row2['Entidad']=='Jalisco') echo 'selected'; ?> >Jalisco</option>
		                  <option value="Mich" <?php if($row2['Entidad']=='Michoacán') echo 'selected'; ?> >Michoac&aacuten</option>
		                  <option value="Mor" <?php if($row2['Entidad']=='Morelos') echo 'selected'; ?> >Morelos</option>
		                  <option value="Nay" <?php if($row2['Entidad']=='Nayarit') echo 'selected'; ?> >Nayarit</option>
		                  <option value="NL" <?php if($row2['Entidad']=='Nuevo León') echo 'selected'; ?> >Nuevo L&eacuteon</option>
		                  <option value="Oa" <?php if($row2['Entidad']=='Oaxaca') echo 'selected'; ?> >Oaxaca</option>
		                  <option value="Pue" <?php if($row2['Entidad']=='Puebla') echo 'selected'; ?> >Puebla</option>
		                  <option value="Q" <?php if($row2['Entidad']=='Querétaro') echo 'selected'; ?> >Quer&eacutetaro</option>
		                  <option value="QR" <?php if($row2['Entidad']=='Quitana Roo') echo 'selected'; ?> >Quitana Roo</option>
		                  <option value="SL" <?php if($row2['Entidad']=='San Luis Potosí') echo 'selected'; ?> >San Luis Potos&iacute</option>
		                  <option value="Sina" <?php if($row2['Entidad']=='Sinaloa') echo 'selected'; ?> >Sinaloa</option>
		                  <option value="Sono" <?php if($row2['Entidad']=='Sonora') echo 'selected'; ?> >Sonora</option>
		                  <option value="Tab" <?php if($row2['Entidad']=='Tabasco') echo 'selected'; ?> >Tabasco</option>
		                  <option value="Tam" <?php if($row2['Entidad']=='Tamaulipas') echo 'selected'; ?> >Tamaulipas</option>
		                  <option value="Tlax" <?php if($row2['Entidad']=='Tlaxcala') echo 'selected'; ?> >Tlaxcala</option>
		                  <option value="Ver" <?php if($row2['Entidad']=='Veracruz') echo 'selected'; ?> >Veracruz</option>
		                  <option value="Yu" <?php if($row2['Entidad']=='Yucatán') echo 'selected'; ?> >Yucat&aacuten</option>
		                  <option value="Zac" <?php if($row2['Entidad']=='Zacatecas') echo 'selected'; ?> >Zacatecas</option>
		                </select>
		                </td> 
		            </tr>
		            <tr>
		                <td>En caso de que no vengas de un CECyT, escribe el nombre de tu escuela:</td>
		            </tr>
		            <tr>
		                <td>Nombre de la escuela: <input type="text" name="school" value="<?php echo $row2['Escuela']; ?>"></td>
		            </tr>
		            <tr>
		                <td>Promedio: <input type="text" name="promedio" value="<?php echo $row2['Promedio']; ?>" required></td>
		            </tr>
		            <tr>
		                <td>ESCOM fue tu:</td>
		            </tr>
              </table><br><br>
              <div align="center" style="position: absolute;top: 1630px;left: 272px;margin: -25px 0 0 -25px;">
                <label>Primera Opci&oacuten</label><br><input type="radio" name="opcion" value="primera"<?php if($row2['opcion']=='Primera Opción') echo "checked=\"checked\" " ?>><br>
                <label>Segunda Opci&oacuten</label><br><input type="radio" name="opcion" value="segunda"<?php if($row2['opcion']=='Segunda Opción') echo "checked=\"checked\" " ?>><br>
                <label>Tercera Opci&oacuten</label><br><input type="radio" name="opcion" value="tercera"<?php if($row2['opcion']=='Tercera Opción') echo "checked=\"checked\" " ?>><br>
                <label>Cuarta Opci&oacuten</label><br><input type="radio" name="opcion" value="cuarta"<?php if($row2['opcion']=='Cuarta Opción') echo "checked=\"checked\" " ?>><br>
              </div>
          <br><br><br><br><br><br><br><br><br>
          <p><a href="paginadedatos.php"><input type="button2" value="Regresar"></a></p>
          <p><button type="submit">Guardar</button></p>
          
          
  </fieldset>
</form>
<script src="Validaciones.js" type="text/javascript"></script>
</div>
  </div>
</body>
</html>
<script>

</script>
