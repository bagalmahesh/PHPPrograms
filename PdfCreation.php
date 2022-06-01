<?php 
require("fpdf.php");
$new=new FPDF();
$new->AddPage();
$new->SetFont("Arial","B",17);
$new->Cell(10,20,"Hello How are you");
$new->Output();
?>
