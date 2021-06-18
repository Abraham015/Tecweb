<?php
/**
 * Envio de correo mediante un servidor SMTP
 */

include("phpmailer.php");

$smtp=new PHPMailer();

# Indicamos que vamos a utilizar un servidor SMTP
$smtp->IsSMTP();

# Definimos el formato del correo con UTF-8
$smtp->CharSet="UTF-8";

# autenticación contra nuestro servidor smtp
$smtp->SMTPAuth   = true;
$smtp->SMTPSecure = "tls";
$smtp->Host       = "smtp.gmail.com";
$smtp->Username   = "abraham.hdez.aha@gmail.com";
$smtp->Password   = "Abisavengers015";
$smtp->Port       = 587;			// MAIL password

# datos de quien realiza el envio
$smtp->From       = "correoQueEnviaElMensaje@miservidor.com"; // from mail
$smtp->FromName   = "Nombre persona que envia el correo"; // from mail name

# Indicamos la dirección donde enviar el mensaje
$mailTo="correoDondeSeEnviaElMensaje@miservidor.info";
$nameTo="Nombre persona que recibe el correo";

# establecemos un limite de caracteres de anchura
$smtp->WordWrap   = 50; // set word wrap

# NOTA: Los correos es conveniente enviarlos en formato HTML y Texto para que
# cualquier programa de correo pueda leerlo.

# Definimos el contenido HTML del correo
$contenidoHTML="<head>";
$contenidoHTML.="<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
$contenidoHTML.="</head><body>";
$contenidoHTML.="<b>Contenido en formato HTML</b>";
$contenidoHTML.="<p><a href='http://www.lawebdelprogramador.com'>http://www.lawebdelprogramador.com</a></p>";
$contenidoHTML.="</body>\n";

# Definimos el contenido en formato Texto del correo
$contenidoTexto="Contenido en formato Texto";
$contenidoTexto.="\n\nhttp://www.lawebdelprogramador.com";

# Definimos el subject
$smtp->Subject="Envio de prueba utilizando un servidor SMTP";

# Adjuntamos el archivo "leameLWP.txt" al correo.
# Obtenemos la ruta absoluta de donde se ejecuta este script para encontrar el
# archivo leameLWP.txt para adjuntar. Por ejemplo, si estamos ejecutando nuestro
# script en: /home/xve/test/sendMail.php, nos interesa obtener unicamente:
# /home/xve/test para posteriormente adjuntar el archivo leameLWP.txt, quedando
# /home/xve/test/leameLWP.txt
$rutaAbsoluta=substr($_SERVER["SCRIPT_FILENAME"],0,strrpos($_SERVER["SCRIPT_FILENAME"],"/"));
$smtp->AddAttachment($rutaAbsoluta."/leameLWP.txt", "LeameLWP.txt");

# Indicamos el contenido
$smtp->AltBody=$contenidoTexto; //Text Body
$smtp->MsgHTML($contenidoHTML); //Text body HTML

$smtp->AddAddress($mailTo,$nameTo);

if(!$smtp->Send())
{
	echo "Error: ".$smtp->ErrorInfo;
}else{
	echo "Envio realizado";
}
?>
