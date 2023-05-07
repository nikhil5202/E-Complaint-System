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
            <a class="nav-link" href="/ecs/login_user/history.php">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ecs/login_user/comp">Complaint</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/ecs/login_user/logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-3">
      <h1 class="display-3 text-black mt-5 mb-2"><center>E-Complaint System</center></h1>
      <p class="lead"><center>A Indain Government Enquiry And E-Complaint System.</center></p>
      <h3><b>Developed By: NIKHIL SRIVASTAVA </b></h3>
      <p>Email ID: srivasnikhil7570@gmail.com</p>
    </header>
<?php
include'db_connect.php';
$compid=$_POST['compid'];
//echo $compid;
$sql="select * from complaint where compid='$compid' ";
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
	
}

  

  
mysqli_close($con);
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
<body bgcolor="White">
<div align="center">
<form id="form1">
  <table width="600" height="300" border="1"  >
  <tr><td colspan="2"><img src="/ecs/images/logo.jpeg" width="150" height="100" align="center"></tr>
 <h1 <caption><b>Complaint Status</b></caption> </h1>
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
  <tr><td>
  <input type="submit" name="Submit" value="Print" onClick="window.print()" /></td>
  <td>&nbsp;</td>
  </tr>
</table>

</div>
<br><br>
 <!-- Footer -->
  <footer class="py-5 bg-success">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; E-Complaint System 2022 by Nikhil Srivastava</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>