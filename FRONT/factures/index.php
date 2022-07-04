<?php
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=u486471496_easyscooter', 'u486471496_admeasyscooter', '3HsbMJXtF7rLGfaq');

class myPDF extends FPDF {
    function header() {
       
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(276, 5, 'EASYSCOOTER', 0, 0, 'C');
        $this->Ln();
        $this->SetFont('Times', '', 12);
        $this->Cell(276, 10, '242 Rue du Faubourg Saint-Antoine, 75012 Paris', 0, 0, 'C');
        $this->Ln();
        $this->Cell(276, 10, 'Téléphone: 0600000000', 0, 0, 'C');
        $this->Ln(20);
}
function footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', '', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
    function headerTable($db) {
        $this->SetFont('Times', 'B', 12);
        $stmt = $db->query("SELECT * FROM users");
        $this->Cell(276, 10, 'idUser', 0, 0, 'C');
        $this->cell(276, 10, 'firstname', 0, 0, 'C');
        $this->cell(276, 10, 'lastname', 0, 0, 'C');
        $this->cell(276, 10, 'phone', 0, 0, 'C');
        $this->cell(276, 10, 'email', 0, 0, 'C');
    }
    function viewTable($db) {
        $this->SetFont('Times', '', 12);
        $stmt = $db->query('SELECT * FROM purchase');
        while ($data = $stmt->fetch()) {
            $this->Cell(276, 10, $data['idurchase'], 1, 0, 'C');
            $this->Cell(276, 10, $data['fkProduct'], 1, 0, 'C');
            $this->Ln();
        }
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L'  , 'A4', 0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
