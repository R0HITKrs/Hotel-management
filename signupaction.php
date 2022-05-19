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
$cid=$_POST['cid'];
$uname=$_POST['uname'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$email=$_POST['email'];
$phn=$_POST['phn'];
$address=$_POST['address'];

$sql=mysqli_query($conn, "insert into client(cid,uname,fname,lname,password,email,phn,address)values('$cid','$uname','$fname','$lname','$password','$email','$phn','$address')");
header("Location: login.php");
?>