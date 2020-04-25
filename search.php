

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="homepage.css">

<head>



</head>


<body onunload="document.getElementById('fetch').style.display='none'">

  <form action="search.php" method="post" id="f" >
    <div id="mainblock1">
      <b><a style="float:left; font-size:30px; color:white;" href="http://localhost/subh/mail/homepage.php">HOME</a></b><br>

<div id="mainblock">
     <input placeholder="EVENT TYPE" list="type" name="Event_type" id="Event_type">
    <datalist id="type">
      <option value="Dance"><option value="Music"><option value="Theatre">
        <option value="Sports">
        <option value="Art">
        <option value="Science and technology">
        <option value="Community">
        <option value="Food and Drink">
        <option value="Charity & NGO">
          <option value="Trade">
      <option value="Corporate">
      <option value="Birthday or wedding">
    </datalist>

    <input list="cities" placeholder="CITY OF EVENT" name="cities" id="cities">
    <datalist id="cities">
      <option value="Mumbai" >
      <option value="Bangalore ">
      <option value="Delhi">
      <option value="Hyderabad">
      <option value="Ahmedabad">
      <option value="Chennai">
      <option value="Kolkata">
      <option value="Bhopal">
      <option value="Thane">
      <option value="Indore">
      <option value="Nagpur">
      <option value="Kanpur">
        <option value="Lucknow">
        <option value="Jaipur">
        <option value="Pune">
        <option value="Nagpur">
        <option value="Surat">
          <option value="Patna">
          <option value="Vadodara">
          <option value="Ghaziabad">
          <option value="Ludhiana">
          <option value="Agra">
          <option value="Nashik">
            <option value="Faridabad">
            <option value="Meerut">
            <option value="Rajkot">
            <option value="Kalyan-Dombivli">
            <option value="Visakhapatnam">
              <option value="Varanasi">
              <option value="Srinagar">
              <option value="Aurangabad">
              <option value="Dhanbad">
              <option value="Amritsar">
              <option value="Navi Mumbai">
                <option value="Allahabad">
                <option value="Howrah">
                <option value="Ranchi">
                <option value="Gwalior">
                <option value="Jabalpur">
                  <option value="Coimbatore">
                    <option value="Vijayawada">
                    <option value="Jodhpur">
                    <option value="Madurai">
                    <option value="Raipur">
                    <option value=""><option value="Salem">
<option value="Mira-Bhayandar">
<option value="     Warangal[8]">
<option value=" Jalgaon">
<option value="Guntur[9]">
<option value="Bhiwandi">
<option value="Saharanpur">
<option value="Gorakhpur">
<option value="Bikaner">
<option value="Amravati">
<option value="Noida">
<option value="Jamshedpur">
<option value="Bhilai">
<option value=" Cuttack">
<option value=" Firozabad">
<option value="Kochi">
<option value="Nellore">[10][11]
<option value=" Bhavnagar">
<option value=" Dehradun">
<option value="Durgapur">
<option value="  Asansol">
<option value=" Rourkela">
<option value="Nanded">
<option value=" Kolhapur">
<option value="Ajmer"><option value="Jammu[12]">
<option value="   Sangli-Miraj & Kupwad">
<option value="   Mangalore">
<option value="    Erode[13]">
<option value="  Belgaum">
<option value=" Ambattur">
<option value="Tirunelveli">
<option value="Malegaon">
<option value="Gaya">
<option value=" Thiruvananthapuram">
<option value="  Akola">
<option value=" Gulbarga">
<option value=" Jamnagar">
<option value="Ujjain">
<option value="Loni">
<option value=" Siliguri">
<option value=" Jhansi">
                <option value="Ulhasnagar">

<option value=" Udaipur">
<option value="Maheshtala">
<option value="Davanagere">
<option value="   Kozhikode">
<option value=" Kurnool">
<option value="Rajpur Sonarpur">
<option value="  Rajahmundry[14][15]">
<option value="Bokaro">
<option value=" South Dumdum">
<option value="Bellary">
<option value="Patiala">
<option value=" Gopalpur">
<option value=" Agartala">
<option value="Bhagalpur">
<option value="Muzaffarnagar">
<option value="Bhatpara">
<option value="Panihati">
<option value="Latur">
<option value="Dhule">
              <option value="      Tirupati[16]">option value="                    Ahmednagar">
              <option value="                    Mathura">
              <option value="                    Kollam">
              <option value="                    Avadi">
              <option value="                    Kadapa">
              <option value="                    Kamarhati"><option value="                    Sambalpur"><option value="                    Bilaspur"><option value="                    Shahjahanpur"><option value="                    Satara"><option value="                    Bijapur"><option value="                    Kakinada"><option value="                    Rampur"><option value="                    Shimoga"><option value="                    Chandrapur"><option value="               Junagadh">
<option value="                    Rohtak">
<option value="                    Korba">
<option value="                    Bhilwara">
<option value="                    Berhampur">
                <option value="    Muzaffarpur">
</datalist>
<input type="date"  id="d1" name="d1" min="01/01/2018">

    <input type="submit"  id="but" name="but" />
</form>
<br>
<div id="lc">
  <input type="button" onclick="low()" id="l"  />
  <input type="button" onclick="high()" id="r" />
</div>

</div>
</div>
  <script>




function on()
{
  var d=new Date(document.getElementById('d1').value);
  var date1=new Date();
  var d3=  new Date(date1.valueOf() + (7*86350989))
    //document.write(d.toLocaleDateString());
    //document.write(date1.toLocaleDateString());
if(d.toLocaleDateString()==date1.toLocaleDateString())
{
    document.getElementById('l').disabled=true;
    document.getElementById('r').disabled=false;

}
if(d.toLocaleDateString()==d3.toLocaleDateString())
{
    document.getElementById('l').disabled=false;
    document.getElementById('r').disabled=true;

}
if(d.toLocaleDateString()>=date1.toLocaleDateString() && d.toLocaleDateString()<=d3.toLocaleDateString())
{
    document.getElementById('l').disabled=false;
    document.getElementById('r').disabled=false;

}
}
  var count=7;

    function low()
    {


    document.getElementById('d1').stepDown();

    on();
    }
    function high()
    {

    document.getElementById('d1').stepUp();

    on();
    }



    </script>

<?php
if (isset($_POST['but']) ) {
$username="root";
$servername="localhost";
$password="admin";
$dbname="event";

$conn=mysqli_connect($servername,$username,$password,$dbname);

error_reporting(0);

$type=$_POST['Event_type'];
$cities=$_POST['cities'];
$date=$_POST['d1'];






$query="SELECT * FROM event where PLACE='$cities' and '$date' between START_DATE and END_DATE";
$data=mysqli_query($conn,$query) ;
if(mysqli_num_rows($data)>0)
{
  while($main=mysqli_fetch_assoc($data))
  {

$title=$main['TITLE_OF_EVENT'];
$description=$main['DESCRIPTION'];
$artists=$main['ARTISTS '];
$sd=$main['START_DATE'];
$ed=$main['END_DATE'];
$time=$main['TIME_OF_EVENT'];
$entry=$main['ENTRY_TYPE_OF_EVENT'];
$place=$main['PLACE'];

?>

<div id="fetch" data-target="fetch1" class="fetch"   onclick="document.getElementById('<?php echo $main['ID'] ?>').style.display='block'; " onmouseover="document.getElementById('<?php echo $main['ID'] ?>').style.visibility='visible';" ><p><font size="6px">TITLE:<?php echo $title;?><br><br>
DESCRIPTION:<?php echo $description;?> </font></p>
<div class="fetch1" name="fetch1" id="<?php echo $main['ID'] ?>">
TITLE:<?php echo $title;?><br><br>
DESCRIPTION:<?php echo $description;?><br><br>
ARTISTS:<?php echo $artists;?><br><br>
START DATE:<?php echo $sd;?><br><br>
END DATE:<?php echo $ed;?><br><br>
TIME OF EVENT:<?php echo $time;?><br><br>
ENTRY TYPE OF EVENT:<?php echo $entry;?><br><br>
PLACE:<?php echo $place;?><br>
<input type='button' value="close" data-target="fetch" onclick="document.getElementById('<?php echo $main['ID'] ?>').style.visibility='collapsre';"  onmousedown=" document.getElementById('<?php echo $main['ID'] ?>').style.display='none';"/>
<br>
<a href="http://localhost/subh/index.php"><input type='button' value="TICKETS" /></a>

</div>


</div>

<?php

}

}
else {
  echo "no";
}
}
?>
</div>
<div>
  <center>
    <b>
<p style="font-size:20px;bottom:1px; width:300px;height:20px;">Best Viewed without Internet Explorer</p>
</center></b></div>


<footer>
  <u><b><a href="about.html">ABOUT US</a></b></u>
</footer>
</body>

</html>
