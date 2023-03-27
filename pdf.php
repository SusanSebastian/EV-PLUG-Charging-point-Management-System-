<?php
session_start();
require_once 'FPDF/fpdf.php';
$customerId = $_SESSION['id'];
$vehicleRegNo = $_SESSION['vehicleno'];
$date = $_SESSION['date'];
$price = $_SESSION['price'];
$time = $_SESSION['time'];
$sid = $_SESSION['sid'];
$db = mysqli_connect("localhost","root","","db_evplug");
$selectStationQuery = mysqli_connect($db, "SELECT * FROM tbl_station where stationId = '$sid'");
$stationRow = mysqli_fetch_assoc($selectStationQuery);
// $query="SELECT f.*,r.* FROM `tbl_booking` f inner join tbl_user on f.loginId=r.customerid WHERE statusset=1;"; //which vcolumn?
// $data = mysqli_query($db,$query);

// //    if(isset($_POST['btn_pdf']))
// //    {
    $pdf =new FPDF('p','mm','a4');
    $pdf->SetFont('Times', 'B', 20);
    $pdf->AddPage();
    $pdf->SetFont('Times', 'B', 20);
    
    
$pdf->Rect(10, 8, 190, 280, 'D');

    while($row = mysqli_fetch_assoc($data))   
    {
        $pdf->Cell(30);
        $pdf->Cell(60,20,' EV PLUG ');
        $pdf->Ln();
        $pdf->Line(10,40,200,40);
        $pdf->Ln(15);

        //station details
        $pdf->SetFont('Times', 'B', 13);
        $pdf->Cell(45,5,'   Station Name :',0,0,'C');
        $pdf->Cell(45,5,$stationRow['stationName'],1,0);
        $pdf->Cell(45,5,'   Place :',0,0,'C');
        $pdf->Cell(45,5,$stationRow['place'],1,1);
        $pdf->Cell(45,5,'   Landmark :',0,0,'C');
        $pdf->Cell(45,5,$stationRow['landmark'],1,0);
        $pdf->Cell(45,5,' Contact :',0,0,'C');
        $pdf->Cell(45,5,$stationRow['contact'],1,0,);


        //booking details
        $pdf->SetFont('Times', 'B', 13);
        $pdf->Line(10,60,200,60);
        $pdf->Ln(30);
        $pdf->Cell(50,5,' Vehicle Number :',0,0);
        $pdf->Cell(10);
        $pdf->Cell(50,5,$vehicleRegNo,0,0);
        $pdf->Cell(10,5,' Booking date : ',0,0);
        $pdf->Cell(50);
        $pdf->Cell(50,5,$date,0,1);
        $pdf->Cell(50,5,'booking time :',0,0);
        $pdf->Cell(10);
        $pdf->Cell(50,5,$time,0,0);
        $pdf->Cell(50,5,' Price :',0,0);
        $pdf->Cell(5);
        $pdf->Cell(50,5,$price,0,1);
        $pdf->Ln(20);


        $pdf->Line(10,190,200,190);
    }

    $pdf->SetFont('Times','','10');
    // while($row = mysqli_fetch_assoc($data))   
    // {
        // $pdf->Cell(50,5,' squarefeet',0,0);
        // $pdf->cell('30','10',$row['squarefeet'],'1','0','C');
        // $pdf->cell('60','10',$row['garden'],'1','0','C');
        // // $pdf->cell('15','10',$row['email'],'1','0','C');
        // $pdf->cell('60','10',$row['bedroom'],'1','1','C');
    $path="C:\Users\sseba\Downloads";
    $pdf->Output();
    // $pdf->Output($_filelocation.$file_name,'F');
    // echo"upload sucessfully"

// }
    ?>