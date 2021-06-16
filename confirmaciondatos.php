<?php
    session_start();
    //Declaración de la clase FPDF
     include("./fpdf183/fpdf.php");
    
    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('./images/Comprobante.png',22.5,4,175);
            $this->Ln(20);
        }

        // Pie de página
        function Footer()
        {
            $this->Image('./images/pie.png',22.5,255,175);
            $this->Ln(100);
        }
    }
    
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
        $conn->set_charset('utf8');
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
    }

    $identidad = "INSERT INTO identidad (Boleta,Nombre,AP,AM,fecha,Genero,CURP)
    VALUES ($bol,'$nom','$apellido','$ape','$fe','$gen','$curp')";

    $contacto="INSERT INTO Contacto (Calle,Colonia,CP,Celular,Correo,Boleta)
    VALUES ('$calle','$colonia',$CP,'$cel','$correo',$bol)";

    $pro="INSERT INTO Procedencia (Escuela,Entidad,Promedio,opcion,Boleta)
    VALUES ('$procedencia','$estado',$promedio,'$opcion',$bol)";


    $resultado = $conn->query( "SELECT * FROM examen");
    $row = $resultado->fetch_assoc();

    if($row==0){
        $row=1;
        $horario="Lunes 3 de Agosto del 2021, 8:30";
        $lab="Laboratorio 1";
        $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
    }else{
        if($row==1&&$row<=150){
            if ($row==1&&$row<26) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 8:30 am";
                $lab="Laboratorio 1";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==26&&$row<51) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 8:30 am";
                $lab="Laboratorio 2";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==51&&$row<76) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 8:30 am";
                $lab="Laboratorio 3";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==76&&$row<101) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 8:30 am";
                $lab="Laboratorio 4";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==101&&$row<126) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 8:30 am";
                $lab="Laboratorio 5";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==126&&$row<151) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 8:30 am";
                $lab="Laboratorio 6";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }
        }elseif ($row==151&&$row<=300){
            if ($row==151&&$row<176) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 9:45 am";
                $lab="Laboratorio 1";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==176&&$row<201) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 9:45 am";
                $lab="Laboratorio 2";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==201&&$row<226) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 9:45 am";
                $lab="Laboratorio 3";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==226&&$row<251) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 9:45 am";
                $lab="Laboratorio 4";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==251&&$row<276) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 9:45 am";
                $lab="Laboratorio 5";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==276&&$row<301) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 9:45 am";
                $lab="Laboratorio 6";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }
        }elseif ($row==301&&$row<=450) {
            if ($row==301&&$row<326) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 10:40 am";
                $lab="Laboratorio 1";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==326&&$row<351) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 10:40 am";
                $lab="Laboratorio 2";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==351&&$row<376) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 10:40 am";
                $lab="Laboratorio 3";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==376&&$row<401) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 10:40 am";
                $lab="Laboratorio 4";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==401&&$row<426) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 10:40 am";
                $lab="Laboratorio 5";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }elseif ($row==426&&$row<451) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 10:40 am";
                $lab="Laboratorio 6";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }
        }else{
            if ($row>=451) {
                $row=$row+1;
                $horario="Lunes 3 de Agosto del 2021, 10:40 am";
                $lab="Laboratorio 1";
                $turno = "INSERT INTO examen (Num,horario,laboratorio) VALUES ($row,'$horario','$lab')";
            }
        }
    }
        

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
    $conn->close();

    //Tomaremos las variables que se tienen
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('P','Legal');
    $pdf->SetFont('Helvetica','',12);
    $pdf->Image('./images/Encabezado1.png',70,40,75);

    /*........................Primera Tabla......................................................................*/

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,62.5);
    $pdf->Cell(60, 5, utf8_decode ('Boleta: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5, $bol, 1,0,'C','R');

    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,67.5);
    $pdf->Cell(60, 5, utf8_decode ('Nombre: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3, 3, 3); //Letra color negro
    $pdf->Cell(60, 5,$nom, 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,72.5);
    $pdf->Cell(60, 5, utf8_decode ('Apellido Paterno'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3, 3, 3); //Letra color negro
    $pdf->Cell(60, 5,$apellido, 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,77.5);
    $pdf->Cell(60, 5, utf8_decode ('Apellido Materno'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$ape, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,82.5);
    $pdf->Cell(60, 5, utf8_decode ('Fecha de Nacimiento'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$fe, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,87.5);
    $pdf->Cell(60, 5, utf8_decode ('Género'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$gen, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,92.5);
    $pdf->Cell(60, 5, utf8_decode ('CURP'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$curp, 1,0,'C','R');

    /*........................Segunda Tabla......................................................................*/

    $pdf->Image('./images/Encabezado2.png',70,102.5,75);

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,125);
    $pdf->Cell(60, 5, utf8_decode ('Calle y Número: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$calle, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,130);
    $pdf->Cell(60, 5, utf8_decode ('Colonia: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$colonia, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,135);
    $pdf->Cell(60, 5, utf8_decode ('Código Postal: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$CP, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,140);
    $pdf->Cell(60, 5, utf8_decode ('Teléfono o celular: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$cel, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,145);
    $pdf->Cell(60, 5, utf8_decode ('Correo Electronico: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$correo, 1,0,'C','R');

    /*........................Tercera Tabla......................................................................*/


    $pdf->Image('./images/Encabezado3.png',70,155,75);

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,177.5);
    $pdf->Cell(60, 5, utf8_decode ('Escuela de procedencia: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$procedencia, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,182.5);
    $pdf->Cell(60, 5, utf8_decode ('Entidad Federativa de procedencia: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,utf8_decode ($estado), 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,187.5);
    $pdf->Cell(60, 5, utf8_decode ('Promedio: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$promedio, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,192.5);
    $pdf->Cell(60, 5, utf8_decode ('ESCOM fue: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,utf8_decode ($opcion), 1,0,'C','R');

 /*........................Tercera Tabla......................................................................*/


    $pdf->Image('./images/Encabezado4.png',70,202.5,75);

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,224.5);
    $pdf->Cell(60, 5, utf8_decode ('Horario de aplicación: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$horario, 1,0,'C','R');

    $pdf->Cell(40, 60,'', 10,8, 'C');
    //$pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,229.5);
    $pdf->Cell(60, 5, utf8_decode ('Laboratorio: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$lab, 1,0,'C','R');


    $pdf->Output('F', 'C:\wamp64\www\Proyecto\ficha.pdf'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.: Registro Alumnos :. </title>
    <link rel="stylesheet" href="EstiloFormulario.css">
    <script src="jquery-3.6.0.min.js"></script>
    <style>
        input[type="submit"],input[type="button"]{
  display: inline-block;
  padding: 5px 15px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;   
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: darkgrey;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
    </style>
</head>
<body>
    <table align="center">
      <tr>
        <td><img src="images/Blanco.png" width="200px" height="150px"></td>
        <td><h1 align="center">&nbsp;Generaci&oacute;n de ficha PDF</h1>
    <p>Alumnos de Nuevo Ingreso
    <br>(Agosto 2021)</p></td>
    <td><img src="images/blanco1.png"></td>
      </tr>
    </table>

    <?php //Se le preguntará al usuario si quiere o no que se le mande su PDF a su correo
    echo "<p align='center'><object  data='ficha.pdf'></p></object>";   ?>
    <p align='center'>En la parte superior se puede encontrar una imagen previa de como resulto el PDF con tus datos, si quieres visualizarlo mejor da click en el boton de abajo</p>;
    <center><a href='ficha.pdf'><input type='button' value='Ver PDF'></a></center>;
    <p align='center'>Si quieres mandar tu PDF por correo, porfavor da click en el boton 'Enviar PDF', de caso contrario, puedes regresar a la página principal</p>;
    <center><a href='Casa.html'><input type='submit' value='Volver al inicio'/></a>&nbsp;<a href='Correo.html'><input type='button' value='Enviar PDF'></a></center>;

 

