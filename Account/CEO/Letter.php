<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>import swal from 'sweetalert';</script>
    <title>Letter Submission</title>
</head>
<body>

<?php

function GetFirstLetter(string $string) {
    $words = explode(" ", strtoupper($string));
    $acronym = "";

    foreach ($words as $w) {
    $acronym .= mb_substr($w, 0, 1);
    }
    return $acronym;
}

$connect = mysqli_connect("localhost", "root", "");
$connect->select_db("svsuapp");
session_start();
$query = "select name, email, position from users where username='".$_SESSION["username"]."'";
$result = $connect->query($query);
$data = $result->fetch_assoc();

$name = $data['name'];
$position = $data['position'];
$sendto = $_POST['user_type'];
$college = $_POST['college'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$email = $data['email'];
$destuser;
if($sendto == "VC")
    $destuser = "vc@subharti";
elseif($sendto == "Registrar")
    $destuser = "registrar@subharti";
else{
    $query = "SELECT username FROM users WHERE designation = '$college'";
    $result = $connect->query($query);
    $row = $result->fetch_assoc();
    $destuser = $row['username'];
}

$ref = "SVSU/";
if($position == "CEO")
    $ref = $ref ."CEO/";
elseif($position == "Vice-Chancellor")
    $ref = $ref ."VC/";
elseif($position == "Registrar")
    $ref = $ref ."REG/";
else
    $ref = $ref .GetFirstLetter($college)."/";
$ref = $ref .date("Y")."/";

lineno55:
$query = "SELECT digit FROM letter";
$res = $connect->query($query);
$num = rand(1000, 9999);
while($row = $res->fetch_assoc()){
    if($row['digit'] == $num)
        goto lineno55;
}
$ref = $ref.$num;

ob_start();
require_once "../../fpdf/fpdf.php";
$pdf = new FPDF();
$pdf->AddPage();

$pdf->Image("../../Resource/subharti logo.jpg", 10, 5, 30, 30);

$pdf->SetFont('Arial', 'B', 15);
//         width, height, text, border, new line, align
$pdf->Cell(0, 5, strtoupper($college), 0, 1, "C");
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 5, "SWAMI VIVEKANAND SUBHARTI UNIVERSITY", 0, 1, "C");
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 3, "(Established under U.P. Govt. Act no. 29 of 2008 and approved under section 2(f) of UGC Act 1956)", 0, 1, "C");
$pdf->Cell(0, 3, "Ph. 0121-2439043, 2439052, +91 7302319995; Telfax: 0121-2439067", 0, 1, "C");
$pdf->Cell(0, 3, "Email: ".$email.", Website: www.subharti.org", 0, 1, "C");

$pdf->Image("../../Resource/naac.png", 165, 5, 40, 28);
$pdf->SetLineWidth(1);
$pdf->Line(0, 35, $pdf->GetPageWidth(), 35);

$pdf->Ln(8);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, "Ref. No. ".$ref, 0, 0, "L");
date_default_timezone_set('Asia/Calcutta');
$pdf->Cell(0, 10, "Date: ".date("d-m-Y h:i:sa"), 0, 1, "R");

$pdf->SetY(60);
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, "To,", 0, 1, "L");
$pdf->SetX(20);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 7, "The ".$sendto, 0, 1, "L");
$pdf->SetX(20);
$pdf->Cell(0, 7, $college, 0, 1, "L");
$pdf->SetX(20);
$pdf->Cell(0, 7, "SVSU, Meerut", 0, 1, "L");

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 7, "Subject:- ".$subject, 0, 1, "L");

$pdf->SetX(20);
$pdf->SetFont('Arial', '', 12);
// $pdf->Cell(0, 7, $msg, 0, 1, "L");
$pdf->MultiCell($pdf->GetPageWidth()-40, 10, $msg, 0, "J", false);


$pdf->Line(0, $pdf->GetPageHeight()-35, $pdf->GetPageWidth(), $pdf->GetPageHeight()-35);
$pdf->SetY($pdf->GetPageHeight()-31);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(0, 5, "Subhartipuram, NH-58, Delhi-Haridwar, Meerut Bypass Rd, Meerut, Uttar Pradesh 250005", 0, 1, "C");
$pdf->Cell(0, 5, "Email: ".$email.", Website: www.subharti.org", 0, 1, "C");

$query = "insert into letter(digit, ref, appdate, status, position, source, name, sourceuser, destuser) values('".$num."', '".$ref."', '".date("d/m/Y")."', '"."Pending"."', '".$position."', '"."CEO"."', '".$name."', '".$_SESSION['username']."', '".$destuser."')";
$connect->query($query);

$file = "../../Letters/".$num.".pdf";
$pdf->output('F', $file);


?>
<script>
    swal("Letter Posted Successfully! Ref No. ".$ref, "", "success")
    .then((value) => {
        window.location.replace("dashboard.php");
    });
</script>

</body>
</html>