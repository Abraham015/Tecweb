<?php
		session_start();
		//Recolección de datos del formulario
		$bol=$_REQUEST["boleta"];
		$nom=$_REQUEST["nombre"];
		$apellido=$_REQUEST["apaterno"];
		$ape=$_REQUEST["amaterno"];
		$fe=$_REQUEST["fecha"];
		if($_REQUEST['mf']=="m"){
			$gen="Masculino";
		}else{
			$gen="Femenino";
		}
		$curp=$_REQUEST["curp"];
		$calle=$_REQUEST["calle"];
		$colonia=$_REQUEST["colonia"];
		$CP=$_REQUEST["CP"];
		$cel=$_REQUEST["cel"];
		$correo=$_REQUEST["correo"];
		switch ($_REQUEST["Procedencia"]) {
			case '1': $procedencia="CECyT #1 Gonzalo Vazquez Vela"; break;
			case '2': $procedencia="CECyT #2 Miguel Bernard"; break;
			case '3': $procedencia="CECyT #3 Estanislao Ramirez Ruiz"; break;
			case '4': $procedencia="CECyT #4 Lazaro Cardenas"; break;
			case '5': $procedencia="CECyT #5 Benito Juarez Garcia"; break;
			case '6': $procedencia="CECyT #6 Miguel Ohton de Mendizabal"; break;
			case '7': $procedencia="CECyT #7 Cuauhtemoc"; break;
			case '8': $procedencia='CECyT #8 Narciso Bassols Garcia'; break;
			case '9': $procedencia="CECyT #9 Juan de Dios Batiz"; break;
			case '10': $procedencia="CECyT #10 Carlos Vallejo Marquez"; break;
			case '11': $procedencia="CECyT #11 Wilfrido Massieu Perez"; break;
			case '12': $procedencia="CECyT #12 Jose Maria Morelos y Pavon"; break;
			case '13': $procedencia="CECyT #13 Ricardo Flores Magon"; break;
			case '14': $procedencia="CECyT #14 Luis Enrique Erro"; break;
			case '15': $procedencia="CECyT #15 Diodoro Antunez Echegaray"; break;
			case '16': $procedencia="CECyT #16 Hidalgo"; break;
			case '17': $procedencia="CECyT #17 Leon-Guanajuato"; break;
			case '18': $procedencia="CECyT #18 Zacatecas"; break;
			case 'C1': $procedencia="CET #1 Walter Cross Buchanan"; break;
			default: $procedencia=$_REQUEST["school"];
		}
		switch ($_REQUEST["Estado"]) {
			case 'Agua': $estado="Aguascalientes"; 	break;
			case 'Baja': $estado="Baja California"; break;
			case 'BajaS': $estado="Baja California Sur"; break;
			case 'Cam': $estado="Campeche"; break;
			case 'Coa': $estado="Coahuila"; break;
			case 'Col': $estado="Colima"; break;
			case 'Chia': $estado="Chiapas"; break;
			case 'Chi': $estado="Chihuahua"; break;
			case 'DF': $estado="Ciudad de México"; break;
			case 'Du': $estado="Durango"; break;
			case 'EM': $estado="Estado de México"; break;
			case 'Gua': $estado="Guanajuato"; break;
			case 'Gue': $estado="Guerrero"; break;
			case 'Hid': $estado="Hidalgo"; break;
			case 'Ja': $estado="Jalisco"; break;
			case 'Mich': $estado="Michoacán"; break;
			case 'Mor': $estado="Morelos"; break;
			case 'Nay': $estado="Nayarit"; break;
			case 'NL': $estado="Nuevo León"; break;
			case 'Oa': $estado="Oaxaca"; break;
			case 'Pue': $estado="Puebla"; break;
			case 'Q': $estado="Querétaro"; break;
			case 'QR': $estado="Quitana Roo"; break;
			case 'SL': $estado="San Luis Potosí"; break;
			case 'Sina': $estado="Sinaloa"; break;
			case 'Sono': $estado="Sonora"; break;
			case 'Tab': $estado="Tabasco"; break;
			case 'Tam': $estado="Tamaulipas"; break;
			case 'Tlax': $estado="Tlaxcala"; break;
			case 'Ver': $estado="Veracruz"; break;
			case 'Yu': $estado="Yucatán"; break;
			case 'Zac': $estado="Zacatecas"; break;
			default: echo "Opción no valida"; break;
		}
		$promedio=$_REQUEST["promedio"];
		switch ($_REQUEST["opcion"]) {
			case 'primera': $opcion="Primera Opción"; break;
			case 'segunda': $opcion="Segunda Opción"; break;
			case 'tercera': $opcion="Tercera Opción"; break;
			case 'cuarta': $opcion="Cuarta Opción"; break;
			default: echo "Escoge una opción"; break;
		}

		//Declaración de las variables de sesión
		$_SESSION["bol"]=$bol;
		$_SESSION["nom"]=$nom;
		$_SESSION["apellido"]=$apellido;
		$_SESSION["ape"]=$ape;
		$_SESSION["fe"]=$fe;
		$_SESSION["gen"]=$gen;
		$_SESSION["curp"]=$curp;
		$_SESSION["calle"]=$calle;
		$_SESSION["colonia"]=$colonia;
		$_SESSION["cp"]=$CP;
		$_SESSION["cel"]=$cel;
		$_SESSION["correo"]=$correo;
		$_SESSION["proc"]=$procedencia;
		$_SESSION["estado"]=$estado;
		$_SESSION["promedio"]=$promedio;
		$_SESSION["opcion"]=$opcion;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.: Confirmacion de Datos :. </title>
    <link rel="stylesheet" href="EstiloFormulario.css">
    <script src="jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1 align="center">Confirmaci&oacute;n de Datos Generales</h1>
    <p>Alumnos de Nuevo Ingreso
    <br>(Agosto 2021)</p>
<div class="container">
    <div class="wrapper">
	    <fieldset class="section">
	      <h2 style="color:white;">Identidad</h2>
	          <table align="center" style="background: white;">
            <tr>
                <td><b>No. de boleta:</b></td>
                <td><?php echo "<label>$bol</label>";?></td>
            </tr>
            <tr>
                <td><b>Nombre(s):</b></td>
                <td><?php echo "<label>$nom</label>";?></td>
            </tr>
            <tr>
                <td><b>Apellido Paterno:</b></td>
                <td><?php echo "<label>$apellido</label>";?></td>
            </tr>
            <tr>
                <td><b>Apellido Materno:</b></td>
                <td><?php echo "<label>$ape</label>";?></td>
            </tr>
            <tr>
                <td><b>Fecha de nacimiento:</b></td>
                <td><?php echo "<label>$fe</label>";?></td>
            </tr>
            <tr>
                <td><b>G&eacute;nero:</b></td>
                  <td><?php echo "<label>$gen</label>";?></td>
            </tr>
            <tr>
                <td><b>CURP:</label></td>
                <td><?php echo "<label>$curp</label>";?></td>
            </tr>
            </table>
        </fieldset> 
        <fieldset class="section">
           <h2 style="color:white;">Contacto</h2>
        <table align="center" style="background: white;">
	            <tr>
	              <td><b>Calle y N&uacutemero:</b></td>
	              <td><?php echo "<label>$calle</label>";?></td>
	            </tr>
	            <tr>
	              <td><b>Colonia:</b></td>
	              <td><?php echo "<label>$colonia</label>";?></td> 
	            </tr>
	            <tr>
	              <td><b>C&oacutedigo Postal:</b></td>
	              <td><?php echo "<label>$CP</label>";?></td> 
	            </tr>
	            <tr>
	              <td><b>Tel&eacutefono o celular:</b></td>
	              <td><?php echo "<label>$cel</label>";?></td> 
	            </tr>
	            <tr>
	              <td><b>Correo Electr&oacutenico:</b></td>
	              <td><?php echo "<label>$correo</label>";?></td> 
	            </tr>
	        </table>
	    </fieldset>
	    <fieldset class="section">
	        <h2 style="color:white;">Procedencia :</h2>
	        <table align="center" style="background: white;">
	              <tr>
	                <td><b>Escuela de Procedencia:</b></td>
	                <td><?php echo "<label>$procedencia</label>";?></td>
	              </tr>
	              <tr>
	                <td><b>Entidad Federativa de Procedencia:</b></td> 
	                <td><?php echo "<label>$estado</label>";?></td>
	              </tr>
	              <tr>
	                <td><b>Promedio:</b></td>
	                <td><?php echo "<label>$promedio</label>";?></td>
	              </tr>
	              <tr>
	                <td><b>ESCOM fue tu:</b></td>
	                <td><?php echo "<label>$opcion</label>";?></td>
	              </tr>
	          </table>
	    </fieldset>
</form>
</div>
  </div>
	    <p>¿Est&aacutes seguro que tus datos son correctos? Si es el caso, da clic en el botón registrar, en dado caso, da clic en el bot&oacuten regresar</p>
	    <center><a href='update.php'><input type='submit' value='Completar registro'/></a>&nbsp;<a href='registroalumno.html'><input type='button' value='Regresar'></a></center>
</body>
</html>
