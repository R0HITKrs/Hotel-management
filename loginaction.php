<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($host,$user,$pass);
if(! $conn)
{
	die('Could not connect:' .mysqli_error());
}
else
{
echo '...';
}
mysqli_select_db($conn,"geetansh_web");
$uname=$_POST['uname'];
$password=$_POST['password'];
$sql=mysqli_query($conn,'select * from client where uname="'.$uname.'" && password="'.$password.'"');
$data=mysqli_fetch_array($sql);
if($uname==$data['uname'])
{
	$_SESSION['cid']=session_id();
	$_SESSION['uname']=$data['uname'];	
	$_SESSION['cid']=$data['cid'];	
	header("Location: loginafter.php");
}
else
{
echo "Wrong username or password";
}
?>
