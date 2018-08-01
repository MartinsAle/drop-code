<?php 
header('Content-type: text/html; charset=ISO-8859-1');	
date_default_timezone_set( 'America/Sao_Paulo' );
require_once("fpdf/fpdf.php");
 
$pdf= new FPDF("P","pt","A4");
 
$pdf->AddPage('L');
$pdf->SetLineWidth(1.5);
$pdf->SetFont('arial','B',12);
$pdf->Image('modelo-certificado.png',0,0,842,595);

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$nomeEvento = $_POST['evento'];
$dataEvento = $_POST['data_evento'];
$cargaHoraria = $_POST['carga_horaria'];

// $nome = "Alessandro Martins Sampaio";
// $cpf = "608.262.273-17";
// $nomeEvento = "Boas Práticas Básico";
// $dataEvento = "28 de Abril de 2018";
// $cargaHoraria = "10";

$texto1 = "Certificamos que ".$nome."\nportador(a) do CPF de n° ".$cpf." participou do\n".$nomeEvento." no dia ".$dataEvento.", com\ncarga horária de ".$cargaHoraria." horas." ;

$texto2 = "Certificamos que ".$nome."\nportador(a) do CPF de n° ".$cpf." participou do\n".$nomeEvento." no dia ".$dataEvento.", com carga horária de ".$cargaHoraria." horas." ;

$texto3 = "Certificamos que ".$nome."\nportador(a) do CPF de n° ".$cpf." concluiu o curso\nde ".$nomeEvento." no dia ".$dataEvento.", com\ncarga horária de ".$cargaHoraria." horas." ;

// Mostrar texto no topo
$pdf->SetFont('Helvetica', 'B', 22); // Tipo de fonte e tamanho
$pdf->SetXY(($nomeEvento == 'Primeiro Encontro Infantil ECFBE' ? '45' : '115'),280); //Parte chata onde tem que ficar ajustando a posição X e Y
$pdf->MultiCell(800, 30, ($nomeEvento == 'Primeiro Encontro Infantil ECFBE' ? $texto2 : ($nomeEvento == 'Boas Práticas Básico' ? $texto3 : $texto1)), '', 'L', 0); // Tamanho width e height e posição


// $pdf->Cell(0,5,"Boteco Digital",0,1,'L');
// $pdf->Ln(8);
// $pdf->Output("arquivo.pdf","D");
$pdf->Output();