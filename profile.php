<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php require 'lib/pdf/fpdf.php'; ?>
<?php
     $db = new Database();
     $id = $_GET['id'];
     $query = "SELECT * FROM resume WHERE user_id = '$id'";
     $result = $db->select($query);
     $row = $result->fetch_assoc();
?>

<?php
  class resume extends FPDF{
      //page header
    function header(){
        $this->SetFont('Arial','B','20');
        $this->SetFillColor(36, 96, 84);
        $this->SetTextColor(225);
        $this->Cell(0, 30, "Resume", 0, 1, 'C', true);

    }
  }
  $pdf = new resume('P','pt','A4');
   $pdf->SetAutoPageBreak(false,40);
   $pdf->SetLineWidth(1);
   $pdf->SetTitle($row['name']);
   $pdf->AddPage();
   $pdf->SetY(100);
   $pdf->SetFont('Arial','B',12);
   $pdf->Cell(0,20,$row['name'].' -- ',0,0,'C');
   $pdf->Cell(-130,20,$row['designation'],0,1,'R');
   $pdf->SetFont('Arial','',10);
   $pdf->Cell(50,13,'Email : ',0,0);
   $pdf->Cell(80,13,$row['email'],0,1);
   $pdf->Cell(50,13,'Contact : ',0,0);
   $pdf->Cell(80,13,$row['phone'],0,0);
   $pdf->Ln(20);
   $des = $row['description'];
   $pdf->SetFont('Arial','I',10);
   $pdf->MultiCell(0,20,$des,0,'C',false);
   $pdf->Ln(20);
   $pdf->MultiCell(0,13,"Education :",0,'J');
   $pdf->MultiCell(0,13,$row['edu'],0,'J');
   $pdf->Ln(20);
   $pdf->Cell(40,13,' Years Of Exprience :',0,1);
   $pdf->cell(80,13,$row['exp'],0,0);
   $pdf->Output("",$row['name'].".pdf",'F');
?>




