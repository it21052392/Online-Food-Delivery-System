<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_food_delivery";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
echo"Connected Successfully";

$a=$_POST['name'];
$b=$_POST['address'];
$c=$_POST['email'];
$d=$_POST['cardnumber'];
$e=$_POST['exp'];
$f=$_POST['ccv'];
$g=$_POST['cash-online'];

if($e>(date('Y-m-d')))
{
   echo'<script>alert("Invalid expire date");</script>'  ;
}

$SQL = "INSERT INTO payment(d_name, d_address,d_email,card_no,exp,ccv,p_type)  VALUES ('$a','$b','$c','$d','$e','$f','$g')";
$SQL1=$conn->query($SQL);
$conn->close();
?>