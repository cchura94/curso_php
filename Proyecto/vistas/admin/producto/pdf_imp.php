<?php
require_once("./../../../models/Producto.php");



require('./../../../fpdf/fpdf.php');
require_once("./../../../models/Producto.php");

class PDF extends FPDF
{
// Cargar los datos
function LoadData()
{
    //Consulta a la base de datos
    $p = new Producto;
    $b = $_GET['id'];
$productos = $p->imprimir($b);
    // Leer las líneas del fichero
    
    $data = array();
    foreach($productos as $prod_fila)
        $data[] = $prod_fila;

    return $data;
}

// Tabla simple
function BasicTable($header, $data)
{
    // Cabecera
    
    $this->Cell(40,7,"ID",1);
    $this->Cell(60,7,"NOMBRE PRODUCTO",1);
    $this->Cell(40,7,$header[2],1);
    $this->Cell(40,7,$header[3],1);
    /*foreach($header as $col)
        $this->Cell(40,7,$col,1);*/
    $this->Ln();
    // Datos
    foreach($data as $row)
    {
        $this->Cell(40,6,$row['id'],1);
        $this->Cell(60,6,$row['nombre'],1);
        $this->Cell(40,6,$row['cantidad'],1);
        $this->Cell(40,6,$row['precio'],1);
        /*foreach($row as $col)
            $this->Cell(40,6,$col,1);*/
        $this->Ln();
    }
}

// Una tabla más completa
function ImprovedTable($header, $data)
{
    // Anchuras de las columnas
    $w = array(40, 35, 45, 40);
    // Cabeceras
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C');
    $this->Ln();
    // Datos
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR');
        $this->Cell($w[1],6,$row[1],'LR');
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
        $this->Ln();
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}

// Tabla coloreada
function FancyTable($header, $data)
{
    // Colores, ancho de línea y fuente en negrita
    $this->SetFillColor(0,0,255);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Cabecera
    $w = array(40, 35, 45, 40);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Restauración de colores y fuentes
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Datos
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Línea de cierre
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Títulos de las columnas
$header = array('ID', 'NOMBRE', 'CANTIDAD', 'PRECIO');
// Carga de datos
$data = $pdf->LoadData();
$pdf->SetFont('Arial','',14);

$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();