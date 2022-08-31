<?php session_start();?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ofd";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
echo"Connected Successfully";

$y=$_SESSION['user_id'];
$a=$_POST['I1'];
$b=$_POST['I2'];
$c=$_POST['I3'];
$d=$_POST['I4'];
$e=$_POST['I5'];

$SQL = "UPDATE customer SET c_fname='$a',c_lname='$b',email='$c',phone_no='$d',address='$e' WHERE c_no='$y'";

$SQL1=$conn->query($SQL);	
$conn->close();
?>