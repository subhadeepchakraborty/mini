<?php

  session_start();

$conn=mysqli_connect('localhost','root','admin','register');

$user =$_POST['username'];
$pw=$_POST['password'];

error_reporting(0);


$query= "select * from register where username='$user' && password='$pw'";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num>=1)
{
header('location:admin.php');
}
else {

    echo "INVALID  USERNAME / PASSWORD";


      }

?>
