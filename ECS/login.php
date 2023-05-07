<?php
session_start();

include'db_connect.php';
 
$admin_name =$_POST['na'];
$pass =$_POST['pass'];
echo $admin_name, $pass;



$sql="select * FROM admin_login where admin_name='$admin_name' and pass='$pass'";

$res=mysqli_query($con,$sql);
$check=mysqli_fetch_array($res);
if(isset($check))
{
	
     echo ("LoginSuccess");
	 $_SESSION["pass"] = $pass;
     header("location:/ecs/admin_dash");
    
}
else
{
	echo 'Admin Login Failed. Check your Password';
     header("location:/ecs/relogin.html");
}
mysqli_close($con);
?>
