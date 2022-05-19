<?php
$link=mysqli_connect("localhost","root","","geetansh_web");
if($link===false)
{
die('ERROR: Could not connect:' .mysqli_connect_error());
}

$id=$_REQUEST['id'];
$sql="SELECT * FROM book WHERE id=' ".$id." ' ";

if($result=mysqli_query($link,$sql))
					{
						if(mysqli_num_rows($result)>0)
						{
							echo"<form action=change1.php method=post>";
							
							while($row=mysqli_fetch_array($result))
							{	
								
								echo"<input type=hidden name=id1 value=$id>";
								echo"<input type=text name=name value=".$row['name'].">";
								echo"<input type=text name=phn value=".$row['phn'].">";
								echo"<input type=text name=email value=".$row['email'].">";
								echo"<input type=text name=type value=".$row['type'].">";
								echo"<input type=text name=date value=".$row['date'].">";
								echo"<input type=submit value=SUBMIT>";
							}
							echo"</form>";
						}
					}
					mysqli_close($link);
				?>
