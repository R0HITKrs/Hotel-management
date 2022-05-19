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
$u=$_POST['username'];
$p=$_POST['password'];
$sql=mysqli_query($conn,'select * from admin_data where username="'.$u.'" && password="'.$p.'"');
$data=mysqli_fetch_array($sql);
$result = mysqli_query($db, $sql) or die( mysqli_error($db));
if($u==$data['username'])
{
	$_SESSION['uname']=session_id();
	$_SESSION['uname']=$uname;
	header("Location: manage.php");
}
else
{
echo "Wrong username or password";
}
?>
