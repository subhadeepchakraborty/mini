<style>

h3
{
font-weight: bold;
color: red;
text-decoration: underline;
  }</style>
<!DOCTYPE html>
<html>
<link href="admin.css" rel="stylesheet">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" /> </head>
<body >
  <h3>
  <right><a href="http://localhost/subh/login.php">LOG OUT</right></a></h3>
<center>
<div id="block">
  <h1>
  <font color="black"><b> ADMIN PANEL</b></font>
  </h1>

<form name="form" action="admin.php" method="post">

<input type="text" id="t1" placeholder="TITLE OF EVENT" class="rr" name="title_of_event"><br>
<input type="text" id="t1" placeholder="DESCRIPTION OF EVENT" name="description_of_event" ><br><br>
<input type="text" id="t1" placeholder="ARTIST(s) OF EVENT" name="artists_of_event"><br>
<div id="lc"><font color="black">
<label >&nbspStart Date:&nbsp&nbsp</label></font><input name="startdate" type="date" id="calender1" name="calender1">
<font color="black">

<label  >&nbspEnd Date:&nbsp&nbsp</label></font><input name="enddate" type="date" id="calender2" name="calender2">
</div>

<br>
<center>
<div id="timeblock"><font color="black"><left>TIME FOR EVENT:&nbsp&nbsp</font></left><input name="time1" id="time"  type="number" placeholder="00" min="0" max="24">
  &nbsp&nbsp&nbsp<input name="time2" id="time" placeholder="00" min="0"  type="number" max="60"><small><font color="black">
    <br>(TIME WILL BE IN 24hr FORMAT)</small><br></div>
</center></font><br><br><br><br><br>
<select name="type">
  <b><option value="FREE"><b>FREE</b></option>
  <option value="RSVP"><b>RSVP</b></option>
  <option value="CURRENCY(amount)"><b>CURRENCY(amount)</b></option>

</select><br><br>
<b><br><br><br><br><b><br><br><br><br>
<input type="text" id="t1" class="t2" placeholder="PLACE/CITY OF EVENT" name="place">
<br><br><br>
<div id="last">
  <input id="button"  value="ADD" type="submit" />
  <a href="admin.php" ><input id="button"  value="ADD ANOTHER" type="button" /></a>
</b>
</div>
</form>
</div>






</center>

</body>

</html>
<?php
//$servername="remotemysql.com";
//$username="qsMyHkfpFx";
//$password="AtMdtojawW";
//$dbname="qsMyHkfpFx";
$username="Vn6HI9swkt";
$servername="remotemysql.com";
$password="8YEUg3HjYl";
$dbname="Vn6HI9swkt";
error_reporting(0);
$conn=mysqli_connect($servername,$username,$password,$dbname);

$title = $_POST['title_of_event'];
$description=$_POST['description_of_event'];
$artist=$_POST['artists_of_event'];
$sd=$_POST['startdate'];
$ed=$_POST['enddate'];
$time = $_POST['time1'] . ':' . $_POST['time2'];
$type=$_POST['type'];
$place=$_POST['place'];


$query="INSERT INTO event(TITLE_OF_EVENT,DESCRIPTION,ARTISTS,START_DATE,END_DATE,TIME_OF_EVENT,ENTRY_TYPE_OF_EVENT,PLACE) VALUES ('$title','$description','$artist','$sd','$ed','$time','$type','$place')";
mysqli_query($conn,$query);


?>
