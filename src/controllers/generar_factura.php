<?php
require('../fpdf/fpdf.php');
session_start();
require_once('../config/db.php');
require_once('../config/conexion.php');
include('../helpers/formato_moneda.php');


    $carrito = $_SESSION['carrito'];
    // print_r($_SESSION['nombre']) ;
    for ($i = 0; $i < count($carrito); $i++) {
        $result = mysqli_query($con, "INSERT INTO compras (numeroventa, imagen,nombre,precio,cantidad,subtotal) values(
            DEFAULT,
            '" . $carrito[$i]['imagen'] . "',
            '" . $carrito[$i]['marca'] . "',	
            '" . $carrito[$i]['precio'] . "',
            '" . $carrito[$i]['stock'] . "',
            '" . ($carrito[$i]['precio'] * $carrito[$i]['stock']) . "')") or die(mysqli_error($con));
    }

    class PDF extends FPDF
    {
        
        function Header()
        {
            $nombre = $_SESSION['nombre'];
            $direccion = $_SESSION['correo'];
            // $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_NUMBER_INT);
            // Logo
            $this->Image('../assets/img/logo.png', 10, 8, 35);
            // Arial bold 15
            $this->SetFont('Times', 'B',);
            // Move to the right
            $this->Cell(80);
            // Title
            $this->Cell(30, 10, "Electro TV's", 0, 3, 'C');
            // Line break
            $this->Ln(30);
            // Datos de usuario
            $this->Cell(100, 6, "Nombre", 0, 0, 'C');
            $this->Cell(40, 6, "Direccion", 0, 1, 'C');
            // Datos del form usuario
            $this->Cell(100, 6, $nombre, 0, 0, 'C');
            $this->Cell(40, 6, $direccion, 0, 1, 'C');
            // Line break
            $this->Ln(30);
        }

        // Colored table
        function FancyTable($header, $data)
        {
            // Colors, line width and bold font
            $this->SetFillColor(85, 160, 211);
            $this->SetTextColor(255);
            $this->SetDrawColor(32, 59, 103);
            $this->SetLineWidth(.3);
            $this->SetFont('', 'B');
            // Header
            $w = array(45, 35, 40, 60);
            for ($i = 0; $i < count($header); $i++)
                $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
            $this->Ln();
            // Color and font restoration
            $this->SetFillColor(224, 235, 255);
            $this->SetTextColor(0);
            $this->SetFont('');
            // Data
            $fill = false;
            $sub_total = 0;
            foreach ($data as $row) {
                // print_r($row);
                $this->Cell($w[0], 6, $row['marca'], 'LR', 0, 'L', $fill);
                $this->Cell($w[1], 6, $row['modelo'], 'LR', 0, '', $fill);
                $this->Cell($w[2], 6, $row['stock'], 'LR', 0, 'C', $fill);
                $this->Cell($w[3], 6, moneda_cop($row['precio']), 'LR', 0, 'C', $fill);
                $this->Ln();
                $fill = !$fill;
                $sub_total += $row['precio'];
            }
            $this->Cell(180, 6, '', 1, 1, 'C', false);
            // $this->Cell(10,6,'','',1,'C',true);
            $this->Cell(45, 6, 'Total', 'LR', 0, 'C', true);
            $this->Cell(35, 6, '', 0, 0, 'C', true);
            $this->Cell(40, 6, '', 0, 0, 'C', true);
            $this->Cell(60, 6, moneda_cop($sub_total), 'LR', 1, 'C', true);
            $fill = !$fill;
            // Closing line
            $this->Cell(array_sum($w), 0, '', 'T');
        }
        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);

            $this->Cell(70, 6, "Electro Tv's", 0, 0, 'C');
            $this->Cell(60, 6, "yeilersoulja@gmail.com", 0, 0, 'C');
            $this->Cell(40, 6, "(+57) (311)-315-3587", 0, 1, 'C');
            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);

            // Page number
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }
    }

    $pdf = new PDF();
    // Column headings
    $header = array('Marca', 'Modelo', 'Cantidad', 'Precio');
    // Data loading
    $pdf->AliasNbPages();
    $data = $carrito;
    $pdf->SetFont('Times', '', 14);
    $pdf->AddPage();
    $pdf->FancyTable($header, $data);
    $pdf->Output();
    // $pdf->Output('I', 'factura.pdf');
    // $pdf->Output('F', 'factura.pdf');
    $messages[] = 'Procesando pedido';
// }
if (isset($errors)) {
    include('../components/mensaje_error.php');
}
if (isset($messages)) {
    include('../components/mensaje_exito.php');
}
