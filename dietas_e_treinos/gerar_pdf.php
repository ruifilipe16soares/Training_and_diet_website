<?php
require('fpdf185/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

// Define a cor de fundo como branco
$pdf->SetFillColor(240, 240, 255);
$pdf->Rect(0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight(), 'F');

$pdf->SetFont('Helvetica', 'B', 14);

// Define a cor do texto como azul escuro (R:0, G:0, B:128)
$pdf->SetTextColor(0, 0, 128);

// Obtém a largura e altura da página
$pageWidth = $pdf->GetPageWidth();
$pageHeight = $pdf->GetPageHeight();

$text = 'Obrigado pela sua preferencia pelo nosso site! A equipa da CorpoEmForma.Lda agradece muito a sua escolha e deixa-lhe o convite para que volte sempre que quiser!';

// Calcula a largura do texto
$textWidth = $pdf->GetStringWidth($text);

// Calcula a posição x e y para centralizar o texto
$x = ($pageWidth - $textWidth) * 1.1;
$y = ($pageHeight / 2) - 120; // Define a posição y no centro da página

$pdf->SetXY($x, $y);
$pdf->MultiCell(0, 10, $text, 0, 'C'); 

// Saída do PDF para o navegador
$pdf->Output();
?>