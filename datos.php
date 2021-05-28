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

		echo "<p align='center'><b><big>REGISTRO DE DATOS GENERALES<br>Alumnos de Nuevo Ingreso<br>(Agosto 2021)</big></b></p>";
	    echo "<p><b><big>Porfavor, confirma tus datos</big></b></p>";

	    echo "<fieldset>
	      <legend>Identidad : </legend>
	          <table align='center'>
	            <tr>
	                <td><label>No. de boleta:</label></td>
	                <td><label>$bol</label></td>
	            </tr>
	            <tr>
	                <td><label>Nombre(s):</label></td>
	                <td><label>$nom</label></td>
	            </tr>
	            <tr>
	                <td><label>Apellido Paterno:</label></td>
	                <td><label>$apellido</label></td>
	            </tr>
	            <tr>
	                <td><label>Apellido Materno:</label></td>
	                <td><label>$ape</label></td>
	            </tr>
	            <tr>
	                <td><label>Fecha de nacimiento:</label></td>
	                <td><label>$fe</label></td>
	            </tr>
	            <tr>
	                <td><label>G&eacute;nero:</label></td>
	                  <td><label>$gen</label></td>
	            </tr>
	            <tr>
	                <td><label>CURP:</label></td>
	                <td><label>$curp</label></td>
	            </tr>
	            </table>
	    </fieldset>";

	    echo "<fieldset>
	        <legend>Contacto :</legend>
	        <table align='center'>
	            <tr>
	              <td>Calle y N&uacutemero:</td>
	              <td><label>$calle</label></td>
	            </tr>
	            <tr>
	              <td>Colonia: </td>
	              <td><label>$colonia</label></td> 
	            </tr>
	            <tr>
	              <td>C&oacutedigo Postal: </td>
	              <td><label>$CP</label></td> 
	            </tr>
	            <tr>
	              <td>Tel&eacutefono o celular: </td>
	              <td><label>$cel</label></td> 
	            </tr>
	            <tr>
	              <td>Correo Electr&oacutenico: </td>
	              <td><label>$correo</label></td> 
	            </tr>
	        </table>
	    </fieldset>";

	    echo "<fieldset>
	        <legend>Procedencia :</legend>
	        <table align='center'>
	              <tr>
	                <td>Escuela de Procedencia: </td>
	                <td><label>$procedencia</label></td>
	              </tr>
	              <tr>
	                <td>Entidad Federativa de Procedencia: </td> 
	                <td><label>$estado</label></td>
	              </tr>
	              <tr>
	                <td>Promedio: </td>
	                <td><label>$promedio</label></td>
	              </tr>
	              <tr>
	                <td>ESCOM fue tu:</td>
	                <td><label>$opcion</label></td>
	              </tr>
	          </table>
	    </fieldset>";

	    echo "<big>¿Est&aacutes seguro que tus datos son correctos? Si es el caso, da clic en el botón registrar, en dado caso, da clic en el bot&oacuten regresar</big>";
	    echo "<center><a href='confirmaciondatos.php'><input type='submit' value='Completar registro'/></a>&nbsp;<a href='registroalumno.html'><input type='button' value='Regresar'></a></center>";

?>