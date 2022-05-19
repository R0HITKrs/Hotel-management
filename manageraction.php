<?php
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
$id=$_POST['id'];
$password=$_POST['password'];
$sql=mysqli_query($conn,'select * from m_data where id="'.$id.'" && password="'.$password.'"');
$data=mysqli_fetch_array($sql);
if($id==$data['id'])
{
	session_start();
	$_SESSION['$id']=session_id();
	header("Location: client.php");
}
else
{
echo "Wrong username or password";
}
?>
