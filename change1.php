<?php
$link=mysqli_connect("localhost","root","","geetansh_web");
if($link===false)
{
die('ERROR: Could not connect:' .mysqli_connect_error());
}

$id=$_POST['id1'];
$name=$_POST['name'];
$phn=$_POST['phn'];
$email=$_POST['email'];
$type=$_POST['type'];
$date=$_POST['date'];

$sql="UPDATE book SET name=' ".$name." ', phn=' ".$phn." ', email=' ".$email." ', type=' ".$type." ', date=' ".$date." ' WHERE id=' ".$id." ' ";
$sql1=mysqli_query($link,$sql);
header("Location: client.php");
mysqli_close($link);
?>