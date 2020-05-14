<!DOCTYPE html>
<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
#main
{
height:600px;
width:900px;
margin-left:24%;
margin-top:5%;
border-radius: 20px;

}
#do
{
  height: 100px;
margin-left: 47%;
 width: 32%;
 display: inline-block;
margin-top: 70px;
}

body{
background-image: url("bc.jpg");
background-repeat: no-repeat;
background-size:cover;
background-position: center;

}
#left
{
width:43%;
float:left;
border:5px solid white;

height: 600px;
border-radius: 20px;
filter: contrast(200%);
background-image: url("guitar.jpg");
background-position: center;
background-size: cover;
}
#right1
{

  width:30%;
  height: 600px;
font-size: 20px;
z-index: 9;
border-radius: 20px;
background-image: url("lo.png");
filter: contrast(151%);

position: absolute;
color: white;
text-align: center;
}
#rightblock
{
width:52%;
border-radius: 20px;

height: 600px;
float:left;

}
#right
{
width:30%;
height: 600px;
border-radius: 20px;
border: 1px solid yellow;
position: absolute;
z-index: 1;
background-image: url("lo.png");
filter: contrast(151%);
border:5px solid white;
font-size: 20px;
color: white;

text-align: center;
}
#sub
{
width:200px;
height:60px;
font-size: 20px;
border: 0;
border-radius: 10px;
background-color: blue;
color:white;
}
#in
{
width:350px;
height:40px;
border-radius: 5px;
border:0;
border-left: 6px solid blue;
font-size: 20px;
filter: opacity(90%);
background-image:url(lo.png);
border-bottom:3px solid blue;
color:white;
}
#bt1
{

height: 50px;
float: left;
width:244px;
font-size:20px;
color: white;
background-color: black;
border-radius: 20px;
font-weight: bold;
border: 5px solid white;

}
#bt2
{

  height: 50px;
  font-size:20px;
  border: 5px solid white;
  border-radius: 20px;
  color: white;
  float:right;
  font-weight: bold;

  background-color: black;
  width:244px;
}

@media screen and (max-width: 800px)
{
body
{

  height:1000px;
  width:100%;
}

#right1{
width:500px;
height: auto;
position: relative;
margin-top:-330px;
}
#right{
width:500px;
height: auto;
position: relative;
margin-top:100px;

}
#left{

  display: none;
}
#do{
float:left;
width: 100px;

  }
  #bt1,#bt2
  {
    width:200px;
    float:left;
    text-align: center;

  }
}


</style>
</p>
<script language="javascript">
function stop()
{
document.getElementById("right1").style.display="none";

}
function stop2()
{
document.getElementById("right1").style.display="block";

}




</script>
<body >
  <b><a style="float:left; font-size:30px; color:white;" href="index.php">HOME</a></b><br>

<div id="ma">
<div style="height:50px;  margin-top: 0px;
">

<div id="do">
<div id="bt1" onclick="stop2()">SIGN UP</div>
<div id="bt2" onclick="stop()">SIGN IN</div></div>
</div>
<div id="main" >

<div id="left" ></div>
<div id="rightblock" >
<div id="right" >
  <form name="form" action="validate.php" method="post">
  <center><h2>LOGIN</h2></center>
  <input type="text" placeholder="USERNAME"  name="username" id="in"><br><br>
  <input type="text" placeholder="PASSWORD"  name="password" id="in"><br><br>
<input   type="submit" id="sub" name="log" value="LOGIN "/></button></form>
</div>
  <div id="right1" >
    <form name="form" action="login.php" method="post">
<center><h2>REGISTER</h2></center>
<input type="text" placeholder="FIRST NAME" name="firstname" id="in"><br><br>
<input type="text" placeholder="LAST NAME" name="lastname" id="in"><br><br>
<input type="email" placeholder="EMAIL" name="email" id="in"><br><br>
<input type="type" placeholder="Username" name="username1" id="in"><br><br>
<input type="password" placeholder="CONFIRM PASSWORD" name="password1" id="in"><br><br><br><br>
<input id="sub" name="butt"  value="REGISTER" type="submit" />


</div>
</div></div>
</form>

</body>
<?php
//$servername="remotemysql.com";
//$username="qsMyHkfpFx";
//$password="AtMdtojawW";
//$dbname="qsMyHkfpFx";
if (isset($_POST['butt']) ) {
  session_start();
  header('location:login.php');

$conn=mysqli_connect('remotemysql.com','Vn6HI9swkt','8YEUg3HjYl','Vn6HI9swkt');

$firstname =$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$username=$_POST['username1'];
$password=$_POST['password1'];
error_reporting(0);


$query= "INSERT INTO register(firstname,lastname,email,username,password) VALUES('$firstname','$lastname','$email','$username','$password')";
mysqli_query($conn,$query);


}
?>

</html>
