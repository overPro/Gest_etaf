<?php
require 'framework/fpdf/fpdf.php';

class LEB extends FPDF {

    function Header() {
        $this->SetY(8);
        $this->SetFont("times", "B", 22);
        $this->SetX(10);
        $this->Cell(80, 10, "MANDIGO SARL", 0, 1, "C");
        $this->SetFont("times", "B", 8);        
        $this->Cell(80, 5, utf8_decode("Société de Services et d'Ingénierie en Informatique"), 0, 1, "C");
        $this->SetFont("times", "B", 8);
        $this->SetY($this->GetY()-15);
        $this->SetX(150);
        $this->MultiCell(50, 4,  utf8_decode("* Création de logiciels\n* Formation\n* Services Informatiques\n* Audits & Conseils")); 
        
        $this->SetFont("times", "", 8);
        $this->SetLineWidth(0.5);
        $this->Line(2, $this->GetY(), 200, $this->GetY());
        $this->Ln();
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont("times", "", 8);
        $this->SetLineWidth(0.5);
        $this->Line(2, $this->GetY(), 200, $this->GetY());
        $this->SetY($this->GetY()+1);
        $this->Cell(180, 4,  utf8_decode("MANDIGO SARL au capital de 1 000 000 FCFA - Adresse Postale : 11 BP 2045 Abidjan 11"),0,1, "C"); 
        $this->Cell(180, 4,  utf8_decode("RCCM : CI-ABJ-2016-B-25168 ; CC:1648842 Q - Siège Social : Abidjan Cocody Angré Luminance"),0,1, "C"); 
        $this->Cell(180, 4,  utf8_decode("Téléphone : 09 10 78 49 / 07 38 56 35 ; Email : mandigo.engtreprise@gmail.com"),0,1, "C"); 
        
        
        
    }

}

$pdf = new LEB();
$pdf->AddPage();
$pdf->SetTitle("Fiche d'identification", true);
$pdf->SetFont("times", "b", 20);
$pdf->SetLineWidth(1);
$pdf->Cell(180, 10, " FICHE D'IDENTIFICATION", 1, 1, "C");
$y = $pdf->GetY();
$pdf->SetY($y + 2);
$pdf->SetLineWidth(0.1);
$pdf->SetFont("times", "B", 10);
$pdf->SetFillColor(255, 127, 39);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(90, 7, " I. IDENTIFICATION DU STAGIAIRE", 1, 1, "L", TRue);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("times", "", 10);
$y = $pdf->GetY();
$pdf->SetY($y + 2);
$pdf->Image("Fichiers/Gest_etaf/$photo", 170, $y, 30, 30);
$pdf->Cell(20, 5, "Matricule :", 0, 0, "L");
$pdf->Cell(20, 5, $matricule, 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(30, 5, "Nom & Prenoms :", 0, 0, "L");
$pdf->Cell(100, 5, $nom_prenom, 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(20, 5, "Date de naissance :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 20);
$pdf->Cell(35, 5, $date_naissance, 0, 0, "");
$x = $pdf->GetX();
$pdf->SetX($x + 10);
$pdf->Cell(20, 5, "Lieu de naissance :", 0, 0, "");
$pdf->SetX($pdf->GetX() + 12);
$pdf->Cell(30, 5, utf8_decode($lieu_naissance), 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(30, 5, utf8_decode("Nationalité:"), 0, 0, "L");
$pdf->Cell(30, 5, $nationalite, 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(30, 5, "Situation Matrimoniale :", 0, 0, "L");
$x = $pdf->GetX();
$pdf->SetX($x + 15);
$pdf->Cell(30, 5, utf8_decode($situation_matrimoniale), 0, 0, "");
$pdf->SetX($pdf->GetX() + 10);
$pdf->Cell(30, 5, "Nombre d'enfants :", 0, 0, "");
$pdf->Cell(30, 5, $nombre_enfant, 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(30, 5, "Domicile :", 0, 0, "L");
$x = $pdf->GetX();
$pdf->SetX($x + 15);
$pdf->Cell(30, 5, utf8_decode($ville), 0, 0, "");
$pdf->SetX($pdf->GetX() + 10);
$pdf->Cell(20, 5, "Quartier :", 0, 0, "");
$pdf->SetX($pdf->GetX() + 10);
$pdf->Cell(30, 5, utf8_decode($quartier), 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(10, 5, "Tel :", 0, 0, "L");
$x = $pdf->GetX();
$pdf->SetX($x + 5);
$pdf->Cell(30, 5, $telephone, 0, 0, "");
$pdf->SetX($pdf->GetX() + 40);
$pdf->Cell(30, 5, "E-mail :", 0, 0, "");
$pdf->Cell(30, 5, $email, 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(10, 5, "Cycle :", 0, 0, "L");
$x = $pdf->GetX();
$pdf->SetX($x + 5);
$pdf->Cell(30, 5, $cycle, 0, 0, "");
$pdf->SetX($pdf->GetX() + 40);
$pdf->Cell(15, 5, utf8_decode("Filière :"), 0, 0, "");
$pdf->SetX($pdf->GetX() + 15);
$pdf->Cell(30, 5, $filiere, 0, 1, "");
$pdf->Ln();

$pdf->SetFont("times", "B", 10);
$pdf->SetFillColor(255, 127, 39);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(90, 7, " II. IDENTIFICATION DES PARENTS DU STAGIAIRE", 1, 1, "L", TRUE);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("times", "", 10);
$y = $pdf->GetY();
$pdf->SetY($y + 2);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->SetX($x + 30);
$pdf->SetFont("", "U");
$pdf->Cell(7, 7, utf8_decode("Père"), 0, 1, "C");
$pdf->SetFont("", "");
$pdf->SetY($pdf->GetY() + 5);

$pdf->Cell(10, 7, "Nom & Prenoms :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 20);
$pdf->Cell(80, 7, utf8_decode($nom_prenom_pere), 0, 1, "");

$pdf->Cell(20, 7, "Lieu d'habitation :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 10);
$pdf->Cell(50, 7, utf8_decode($lieu_habitation_pere), 0, 1, "");

$pdf->Cell(15, 7, utf8_decode("Nationalité :"), 0, 0, "L");
$pdf->SetX($pdf->GetX() + 15);
$pdf->Cell(50, 7, utf8_decode($nationalite_pere), 0, 1, "");

$pdf->Cell(15, 7, "Profession :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 15);
$pdf->Cell(50, 7, utf8_decode($profession_pere), 0, 1, "");

$pdf->Cell(10, 7, "Nombre d'enfants :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 20);
$pdf->Cell(50, 7, $nombre_enfant_pere, 0, 1, "");

$pdf->Cell(7, 7, "Tel :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 22);
$pdf->Cell(50, 7, $telephone_pere, 0, 1, "");
$y2 = $pdf->GetY();

$pdf->Line(90, $y, 90, $y2);
$pdf->SetY($y);
$pdf->SetX(135);
$pdf->SetFont("", "U");
$pdf->Cell(7, 7, utf8_decode("Mère"), 0, 1, "C");
$pdf->SetFont("", "");

$pdf->SetY($y + 10);
$pdf->SetX(95);
$pdf->Cell(10, 7, "Nom & Prenoms :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 20);
$pdf->Cell(80, 7, utf8_decode($nom_prenom_mere), 0, 1, "");

$pdf->SetY($pdf->GetY());
$pdf->SetX(95);
$pdf->Cell(20, 7, "Lieu d'habitation :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 10);
$pdf->Cell(50, 7, utf8_decode($lieu_habitation_mere), 0, 1, "");

$pdf->SetY($pdf->GetY());
$pdf->SetX(95);
$pdf->Cell(15, 7, utf8_decode("Nationalité :"), 0, 0, "L");
$pdf->SetX($pdf->GetX() + 15);
$pdf->Cell(50, 7, utf8_decode($nationalite_mere), 0, 1, "");

$pdf->SetY($pdf->GetY());
$pdf->SetX(95);
$pdf->Cell(15, 7, "Profession :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 15);
$pdf->Cell(50, 7, utf8_decode($profession_mere), 0, 1, "");

$pdf->SetY($pdf->GetY());
$pdf->SetX(95);
$pdf->Cell(15, 7, "Nombre d'enfants :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 15);
$pdf->Cell(50, 7, $nombre_enfant_mere, 0, 1, "");

$pdf->SetY($pdf->GetY());
$pdf->SetX(95);
$pdf->Cell(7, 7, "Tel :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 23);
$pdf->Cell(50, 7, $telephone_mere, 0, 1, "");
$pdf->Ln();

$pdf->SetFont("times", "B", 10);
$pdf->SetFillColor(255, 127, 39);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(180, 7, " III. IDENTIFICATION DE LA PERSONNE A CONTACTER EN CAS D'URGENCE", 1, 1, "L", TRUE);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont("times", "", 10);
$y = $pdf->GetY();
$pdf->SetY($y + 2);

$pdf->Cell(30, 5, "Nom & Prenoms :", 0, 0, "L");
$pdf->Cell(100, 5, $nom_prenom, 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(20, 5, "Date de naissance :", 0, 0, "L");
$pdf->Cell(20, 5, $date_naissance_urgence, 0, 0, "");
$pdf->SetX($pdf->GetX() + 60);
$pdf->Cell(20, 5, "Lieu de naissance :", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 15);
$pdf->Cell(40, 5, $lieu_naissance_urgence, 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(20, 5, utf8_decode("Nationalité :"), 0, 0, "L");
$pdf->Cell(20, 5, $nationalite_urgence, 0, 0, "");
$pdf->SetX($pdf->GetX() + 60);
$pdf->Cell(20, 5, "Profession :", 0, 0, "L");
$pdf->Cell(20, 5, utf8_decode($profession_urgence), 0, 1, "");

$pdf->SetY($pdf->GetY() + 2);
$pdf->Cell(20, 5, utf8_decode("Domicile :"), 0, 0, "L");
$pdf->Cell(20, 5, utf8_decode($lieu_habitation_urgence), 0, 0, "");
$pdf->SetX($pdf->GetX() + 60);
$pdf->Cell(20, 5, "Tel :", 0, 0, "L");
$pdf->Cell(20, 5, $telephone_urgence, 0, 1, "");

$pdf->Ln();
$pdf->Ln();
$pdf->SetFont("", "UB", 8);
$pdf->Cell(30, 5, "Signature et cachet de l'entreprise", 0, 0, "L");
$pdf->SetX($pdf->GetX() + 120);
$pdf->Cell(30, 5, "Signature du Stagiaire", 0, 1, "R");



$pdf->Output("", "identification.pdf", true);
