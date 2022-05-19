
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
$id=$_POST['id'];
$name=$_POST['name'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql="delete from m_data where id=".$id."";
$sql1=mysqli_query($conn,$sql);
header ("Location: remove.php");
?>
