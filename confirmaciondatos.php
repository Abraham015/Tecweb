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
            $this->Image('./images/pie.png',22.5,230,175);
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
    VALUES ('$calle','$colonia',$CP,$cel,'$correo',$bol)";

    $pro="INSERT INTO Procedencia (Escuela,Entidad,Promedio,opcion,Boleta)
    VALUES ('$procedencia','$estado',$promedio,'$opcion',$bol)";

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
    $pdf->AddPage('P','letter');
    $pdf->SetFont('Helvetica','',12);
    $pdf->Image('./images/Encabezado1.png',70,50,75);

    /*........................Primera Tabla......................................................................*/

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,72.5);
    $pdf->Cell(60, 5, utf8_decode ('Boleta: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5, $bol, 1,0,'C','R');

    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,77.5);
    $pdf->Cell(60, 5, utf8_decode ('Nombre: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3, 3, 3); //Letra color negro
    $pdf->Cell(60, 5,$nom, 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,82.5);
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
    $pdf->SetXY(45,87.5);
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
    $pdf->SetXY(45,92.5);
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
    $pdf->SetXY(45,97.5);
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
    $pdf->SetXY(45,102.5);
    $pdf->Cell(60, 5, utf8_decode ('CURP'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$curp, 1,0,'C','R');

    /*........................Segunda Tabla......................................................................*/

    $pdf->Image('./images/Encabezado2.png',70,112.5,75);

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,135);
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
    $pdf->SetXY(45,140);
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
    $pdf->SetXY(45,145);
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
    $pdf->SetXY(45,150);
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
    $pdf->SetXY(45,155);
    $pdf->Cell(60, 5, utf8_decode ('Correo Electronico: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,$correo, 1,0,'C','R');

    /*........................Tercera Tabla......................................................................*/


    $pdf->Image('./images/Encabezado3.png',70,165,75);

    $pdf->Cell(40, 60,'', 10,8, 'C');
    $pdf->Ln(5);
    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,187.5);
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
    $pdf->SetXY(45,192.5);
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
    $pdf->SetXY(45,197.5);
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
    $pdf->SetXY(45,202.5);
    $pdf->Cell(60, 5, utf8_decode ('ESCOM fue: '), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5,utf8_decode ($opcion), 1,0,'C','R');
    
    /*$pdf->Cell(0,25,'',0,1);
    $pdf->Cell(0,10,'Numero de boleta: '.$bol.'',0,1);
    $pdf->Cell(0,10,'Nombre: '.$nom.'',0,1);
    $pdf->Cell(0,10,'Apellido Paterno: '.$apellido.'',0,1);
    $pdf->Cell(0,10,'Apellido Materno: '.$ape.'',0,1);
    $pdf->Cell(0,10,'Fecha de Nacimiento: '.$fe.'',0,1);
    $pdf->Cell(0,10,'Genero: '.$gen.'',0,1);
    $pdf->Cell(0,10,'CURP: '.$curp.'',0,1);
    $pdf->Cell(0,10,'Calle: '.$calle.'',0,1);
    $pdf->Cell(0,10,'Colonia: '.$colonia.'',0,1);
    $pdf->Cell(0,10,'Codigo Postal '.$CP.'',0,1);
    $pdf->Cell(0,10,'Celular: '.$cel.'',0,1);
    $pdf->Cell(0,10,'Correo: '.$correo.'',0,1);
    $pdf->Cell(0,10,'Procedencia: '.utf8_decode($procedencia).'',0,1);
    $pdf->Cell(0,10,'Estado de Procedencia: '.utf8_decode($estado).'',0,1);
    $pdf->Cell(0,10,'Promedio: '.$promedio.'',0,1);
    $pdf->Cell(0,10,'Numero de opcion: '.utf8_decode($opcion).'',0,1);*/

    $pdf->Output('F', 'C:\wamp64\www\Tecweb\ficha.pdf');


    //Se le preguntará al usuario si quiere o no que se le mande su PDF a su correo
    echo "<p align='center'><object  data='ficha.pdf'></p></object>";
    echo "<p align='center'>En la parte superior se puede encontrar una imagen previa de como resulto el PDF con tus datos, si quieres visualizarlo mejor da click en el boton de abajo</p>";
    echo "<center><a href='ficha.pdf'><input type='button' value='Ver PDF'></a></center>";
    echo "<p align='center'>Si quieres mandar tu PDF por correo, porfavor da click en el boton 'Enviar PDF', de caso contrario, puedes regresar a la página principal</p>";
    echo "<center><a href='Casa.html'><input type='submit' value='Volver al inicio'/></a>&nbsp;<a href='Correo.html'><input type='button' value='Enviar PDF'></a></center>";
?>
