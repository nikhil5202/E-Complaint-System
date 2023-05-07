<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Complaint System</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/ecs/login_user/user_dash/">E-Complaint System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/ecs/login_user/user_dash/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/ecs/login_user/history.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ecs/login_user/comp">Complaint</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="/ecs/login_user/status">Complaint Status</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ecs/login_user/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br>
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-4"><center>E-Complaint System</center></h1>
	   <p class="lead"><center>An Online Enquiry And E-Complaint System.</center></p>
     <h3><b>Developed By: NIKHIL SRIVASTAVA </b></h3>
      <p>Email ID: srivasnikhil7570@gmail.com</p>
	  <h1 <caption><center>Complaint History</center></caption> </h1>
    </header>






<?php
// Always start this first
session_start();
$em="";
if ( isset( $_SESSION['email'] ) ) {
   $em=$_SESSION["email"] ;
  // echo $em;
   
} else {
    // Redirect them to the login page
    header("Location:ges/login_user/user_dash.html");
}
include'db_connect.php';
$sql="select * from complaint where email='$em' ";
$result = mysqli_query($con, $sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
//	echo $row['id'];
	//echo $row['firstName'];
	//echo $row['lastName'];
	
	$compid= $row['compid'];
	$state=$row['state'];	
	$city=$row['city'];
	$department=$row['department'];
	$msg=$row['msg'];	
	$datetime=$row['datetime'];
	$status=$row['status'];
	?>
	
<html>
<head>
<style>
table{
	background-color:white;
	
}
.dash{
  border: 0 none;
  border-top: 2px dashed #322f32;
  background: white;
  color:white;
  height:0;
} 
</style>
</head>
<body bgcolor="#0099CC">
<div align="center">
<form id="form1">
  <table width="600" height="300" border="1"  >
  <tr><td colspan="2"><img src="/ecs/images/logo.jpeg" width="150" height="100" align="center" alt="ECS"></tr>
  
  <tr>
    <th width="171" scope="row">Complaint Receipt No:</th>
    <td width="260"><?php echo$compid; ?></td>
  </tr>
  
  <tr>
    <th width="171" scope="row">State:</th>
    <td width="260"><?php echo $state; ?></td>
  </tr>
  <tr>
    <th width="171" scope="row">City:</th>
    <td width="260"><?php echo $city; ?></td>
  </tr>
  <tr>
    <th width="171" scope="row">Department:</th>
    <td width="260"><?php echo $department; ?></td>
  </tr>
  <tr>
    <th width="171" scope="row">Date_Time:</th>
    <td width="260"><?php echo$datetime; ?></td>
  </tr>
   <tr>
    <th width="171" scope="row">Status:</th>
    <td width="260"><?php echo$status; ?></td>
  </tr>
  
 
 
  <tr>
    <th  scope="row"><p>Complaint: </p>
      <p>&nbsp;</p></th>
	 <th  scope="row"><p><?php echo$msg; ?> </p>
	   <p>&nbsp;</p></th>
  </tr>
  
</table>
</div>

</body>

</html>

<?php

}

  

  
mysqli_close($con);
?>


 <!-- Footer -->
 <tr><td>
  <input type="submit" name="Submit" value="Print" onClick="window.print()" /></td>
  <td>&nbsp;</td>
  </tr>
  <footer class="py-5 bg-success">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; E-Complaint System 2022 by Nikhil Srivastava</p>
    </div>
    <!-- /.container -->
  </footer>
  </body>

</html>