<style>
body{
  background-color: lightblue;
}
input
{
  width:450px;
  height:50px;
  border:0;
  border-bottom: 3px solid blue;
  border-right: 1px solid blue;
  border-top: 1px solid blue;
float:right;
  border-left:8px solid #1569C7;

}
#w
{
align-items: flex-start;
width:900px;
height:800px;
margin-left: 24%;

}
</style>



<html>
<form method="post" >
  <div id="w">
  <center>  <h1>TICKET BOOKING</h1></center>
  <center><font size="10px">
NAME:&nbsp<input type="text" name="user" ><br><br>
Address:&nbsp<input type="text" name="address"><br><br>
Contact No. :&nbsp<input type="number" name="number"><br><br>
No. of Adults. :&nbsp<input type="number" name="adult"><br><br>
AADHAAR NO. :&nbsp<input type="number" name="aadhaar"><br><br>
PAN NO. :&nbsp<input type="number" name="pan"><br><br></font>
<input type="submit" VALUE="GET TICKET" name="submit"><br><br><br></div>
</form>
</center>

</html>
<?php
include_once('tcpdf.php');
if (isset($_POST['submit']) ) {
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$user =$_POST['user'];
$address =$_POST['address'];
$number =$_POST['number'];
$adult =$_POST['adult'];
$aadhaar =$_POST['aadhaar'];
$pan =$_POST['pan'];





// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


$pdf->AddPage();

$html = <<<EOD
<style="float:;">
<font size="20px" color="blue">
<h1>EVENT TICKET - EVENTOO (makes event reachable)</h1>
<p>ONLINE TICKET PASS ORGANIZED BY EVENTOO VERIFICATION</p></center>
NAME:{$user}<br><br>
Address:{$address}<br><br>
Number:{$number}<br><br>
Adult. No :{$adult}<br><br>
Aadhaar No.:{$aadhaar}<br><br>
PAN:{$pan}<br><br>
</font>
</style>
<img src="eventoo1.png" width="200px" height="200px"/><img src="sign.png" width="200px" height="150px"/>
EOD;

$pdf->writeHTML($html);
//ob_end_clean();
$pdf->Output('test.pdf', 'IF');
}
?>
