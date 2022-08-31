<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
echo"Connected Successfully";

$a=$_POST['name'];
$b=$_POST['feedback'];

$SQL = "INSERT INTO feedback VALUES ('$a','$b')";
$SQL1=$conn->query($SQL);
$conn->close();
?>