<?php
require('./recursos/FPDF/fpdf.php');
require("conexion.php");
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('./recursos/imagenes/logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','',12);
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->Cell(70,10,utf8_decode('Tabla Usuario'),1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->SetFillColor(168,168,196);

    $this->Cell(20,5,utf8_decode('Nombre'),1,0,'C',true);
    $this->Cell(35,5,utf8_decode('Apellido'),1,0,'C',true);
    $this->Cell(40,5,utf8_decode('Email'),1,0,'C',true);
    $this->Cell(35,5,utf8_decode('Telefono'),1,0,'C',true);
    $this->Cell(45,5,utf8_decode('Fecha Alta'),1,1,'C',true);
  

}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}


$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($con,$sql);
// Creación del objeto de la clase heredada


$pdf = new PDF('P', 'mm', array(300,200));
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

while($fila = $resultado->fetch_assoc()){
    $pdf->SetFillColor(159,241,196);

    $pdf->Cell(20,5,$fila['nombre'],1,0,'C',0);
    $pdf->Cell(35,5,utf8_decode($fila['apellido']),1,0,'L',0);
    $pdf->Cell(40,5,utf8_decode($fila['email']),1,0,'L',true);
    $pdf->Cell(35,5,$fila['telefono'],1,0,'C',0);
    //$pdf->Cell(35,5,$fila['imagen'].parse,1,1,'C',0);
    $pdf->Cell(45,5,$fila['fechaAlta'],1,1,'C',0);
   
    
  
}
    $pdf->Output();
?>