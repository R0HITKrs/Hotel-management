
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

$sql="update m_data set id='".$id."', name='".$name."', phn='".$phn."', email='".$email."', password='".$password."' WHERE id=".$id."";
$sql1=mysqli_query($conn,$sql);
header ("Location: edit.php");
?>
