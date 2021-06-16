<?php
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

    // Creación del objeto de la clase heredada
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
    $pdf->Cell(60, 5, utf8_decode ('Nombre'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3,3,3); //Letra color negro
    $pdf->Cell(60, 5, 'Abraham', 1,0,'C','R');

    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,77.5);
    $pdf->Cell(60, 5, utf8_decode ('Boleta'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3, 3, 3); //Letra color negro
    $pdf->Cell(60, 5, 2020630148, 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(149,47,87);//Fondo guinda de celda
    $pdf->SetTextColor(255,255,255); //Letra color blanco
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetXY(45,82.5);
    $pdf->Cell(60, 5, utf8_decode ('Apellido Paterno'), 1,0,'C','R');
    $pdf->SetFont('Arial', '', 9);

    $pdf->SetFillColor(255,255,255);//Fondo verde de celda
    $pdf->SetTextColor(3, 3, 3); //Letra color negro
    $pdf->Cell(60, 5,'Hernandez', 1,0,'C','R');
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
    $pdf->Cell(60, 5, 'Alvarado', 1,0,'C','R');

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
    $pdf->Cell(60, 5, '15-03-2001', 1,0,'C','R');

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
    $pdf->Cell(60, 5, 'Masculino', 1,0,'C','R');

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
    $pdf->Cell(60, 5, 'HEAA010315HDFRLBA1', 1,0,'C','R');

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
    $pdf->Cell(60, 5, 'Biologo Maximino Martinez 3505', 1,0,'C','R');

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
    $pdf->Cell(60, 5, 'Obrero Popular', 1,0,'C','R');

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
    $pdf->Cell(60, 5,'02840', 1,0,'C','R');

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
    $pdf->Cell(60, 5,5534045251, 1,0,'C','R');

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
    $pdf->Cell(60, 5, 'abraham.hdez.aha@gmail.com', 1,0,'C','R');

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
    $pdf->Cell(60, 5, 'CECyT 8', 1,0,'C','R');

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
    $pdf->Cell(60, 5, 'Ciudad de Mexico', 1,0,'C','R');

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
    $pdf->Cell(60, 5, 9.5, 1,0,'C','R');

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
    $pdf->Cell(60, 5,utf8_decode ('Primera Opción'), 1,0,'C','R');

    $pdf->Output();
?>