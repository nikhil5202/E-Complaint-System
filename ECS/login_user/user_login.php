
<?php

// Start the session
session_start();
include'db_connect.php';
 
$email =$_POST['email'];
$pass =$_POST['pass'];
echo $email, $pass;



$sql="select * FROM user_reg where email='$email' and pass='$pass'";

$res=mysqli_query($con,$sql);
$check=mysqli_fetch_array($res);
if(isset($check))
{
	
   echo ("LoginSuccess");
   // Set session variables

$_SESSION["email"] = $email;
$_SESSION["pass"] = $pass;
echo "Session variables are set.";
    header("location:/ecs/login_user/user_dash/index.html");
}
else
{
	echo 'failure';
	
	header("location:/ecs/login_user/user_login.html");
}
mysqli_close($con);
?>
