<?php 
session_start();
?>
<?php
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host,$user,$pass);
if(! $conn)
{
die('Could not connect:' .mysqli_error());
}

mysqli_select_db($conn,"geetansh_web");
$cid=$_SESSION['cid'];
$name=$_POST['name'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$type=$_POST['type'];
$date=$_POST['date'];

$sql=mysqli_query($conn, "insert into book(cid,name,phn,email,type,date)values('$cid','$name','$phn','$email','$type','$date')");
header("Location: loginafter.php");
?>