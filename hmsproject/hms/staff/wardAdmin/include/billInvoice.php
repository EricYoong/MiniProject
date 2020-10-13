<?php
require 'fpdf17/fpdf.php';
include 'config.php';

date_default_timezone_set('Asia/Kuala_Lumpur');
$ldate = date('d/m/Y', time());

//get invoices data
$medicalBill = mysqli_query($con, "SELECT * FROM medical_billingtb WHERE P_ID = 'P00001' AND paid_status = 'Not Paid'");
$utilityBill = mysqli_query($con, "SELECT * FROM utility_billingtb WHERE P_ID = 'P00001' AND paid_status = 'Not Paid'");
$surgeryBill = mysqli_query($con, "SELECT * FROM surgery_billingtb WHERE P_ID = 'P00001' AND paid_status = 'Not Paid'");
$sum         = 0.0;
$counter     = 0;

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P', 'mm', 'A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial', 'B', 14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130, 5, 'HIMSPRO', 0, 0);
$pdf->Cell(59, 5, 'INVOICE', 0, 1); //end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(130, 5, '[Street Address]', 0, 0);
$pdf->Cell(59, 5, '', 0, 1); //end of line

$pdf->Cell(130, 5, '[City, Country, ZIP]', 0, 0);
$pdf->Cell(25, 5, 'Date', 0, 0);
$pdf->Cell(34, 5, $ldate, 0, 1); //end of line

$pdf->Cell(130, 5, 'Phone [+12345678]', 0, 0);
$pdf->Cell(25, 5, 'Invoice #', 0, 0);
$pdf->Cell(34, 5, '[1234567]', 0, 1); //end of line

$pdf->Cell(130, 5, 'Fax [+12345678]', 0, 0);
$pdf->Cell(25, 5, 'Customer ID', 0, 0);
$pdf->Cell(34, 5, '[1234567]', 0, 1); //end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line

//billing address
$pdf->Cell(100, 5, 'Bill to', 0, 1); //end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Name]', 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Company Name]', 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Address]', 0, 1);

$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Phone]', 0, 1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line

//patient contents
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(130, 5, 'Description', 1, 0);
$pdf->Cell(25, 5, 'Taxable', 1, 0);
$pdf->Cell(34, 5, 'Amount', 1, 1); //end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0, 1); //end of line
$pdf->Cell(189, 10, '', 0, 1); //end of line

//invoice contents
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(130, 5, 'Description', 1, 0);
$pdf->Cell(25, 5, 'Taxable', 1, 0);
$pdf->Cell(34, 5, 'Amount', 1, 1); //end of line

//Numbers are right-aligned so we give 'R' after new line parameter
$pdf->SetFont('Arial', '', 12);

if (mysqli_num_rows($medicalBill) > 0) {
    $nestedArray = array();
    while ($rows = mysqli_fetch_assoc($medicalBill)) {
        array_push($nestedArray, $rows);
    }
    foreach ($nestedArray as $array) {
        $sum += $nestedArray[$counter]['M_PRICE'];
        $pdf->Cell(130, 5, $nestedArray[$counter]['M_DESC'], 1, 0);
        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(34, 5, $nestedArray[$counter]['M_PRICE'], 1, 1, 'R'); //end of line
        $counter++;
    }
}

if (mysqli_num_rows($utilityBill) > 0) {
    $counter     = 0;
    $nestedArray = array();
    while ($rows = mysqli_fetch_assoc($utilityBill)) {
        array_push($nestedArray, $rows);
    }
    foreach ($nestedArray as $array) {
        $sum += $nestedArray[$counter]['M_PRICE'];
        $pdf->Cell(130, 5, $nestedArray[$counter]['M_DESC'], 1, 0);
        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(34, 5, $nestedArray[$counter]['M_PRICE'], 1, 1, 'R'); //end of line
        $counter++;
    }
}

if (mysqli_num_rows($surgeryBill) > 0) {
    $counter     = 0;
    $nestedArray = array();
    while ($rows = mysqli_fetch_assoc($surgeryBill)) {
        array_push($nestedArray, $rows);
    }
    foreach ($nestedArray as $array) {
        $sum += $nestedArray[$counter]['M_PRICE'];
        $pdf->Cell(130, 5, $nestedArray[$counter]['M_DESC'], 1, 0);
        $pdf->Cell(25, 5, '-', 1, 0);
        $pdf->Cell(34, 5, $nestedArray[$counter]['M_PRICE'], 1, 1, 'R'); //end of line
        $counter++;
    }
}

//summary
$pdf->Cell(130, 5, '', 0, 0);
$pdf->Cell(25, 5, 'Subtotal', 0, 0);
$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(30, 5, '4,450', 1, 1, 'R'); //end of line

$pdf->Cell(130, 5, '', 0, 0);
$pdf->Cell(25, 5, 'Taxable', 0, 0);
$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(30, 5, '0', 1, 1, 'R'); //end of line

$pdf->Cell(130, 5, '', 0, 0);
$pdf->Cell(25, 5, 'Tax Rate', 0, 0);
$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(30, 5, '10%', 1, 1, 'R'); //end of line

$pdf->Cell(130, 5, '', 0, 0);
$pdf->Cell(25, 5, 'Total Due', 0, 0);
$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(30, 5, number_format($sum, 2), 1, 1, 'R'); //end of line

$pdf->Output();
