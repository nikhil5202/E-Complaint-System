<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Complaint System </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Admin Panel </div>
      <div class="list-group list-group-flush">
        <a href="/ecs/admin_dash/index.html" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="admincomplaint.php" class="list-group-item list-group-item-action bg-light">View Complaint</a>
        <a href="/ecs/login_user/status/index.html" class="list-group-item list-group-item-action bg-light">Status</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-outline-success " id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/ecs/admin_dash/logout.php">Log Out <span class="sr-only">(current)</span></a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> -->
            
          </ul>
        </div>
      </nav>
	  
	    <!-- Header -->
  <header class=" py-5 mb-5" style="background-color: #99ff99;">
    <div class="container h-100" >
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-success font-italic font-weight-bold mt-5 mb-2">E-Complaint System </h1>
          <p class="lead mb-5 text-dark">An Online Enquiry And E-Complaint System. </p>
          <h3><b>Developed By: NIKHIL SRIVASTAVA </b></h3>
          <p>Email ID: srivasnikhil7570@gmail.com</p>
        </div>
      </div>
    </div>
  </header>

<?php
include'db_connect.php';

$compid=$_GET['compid'];
//echo $compid;
$sql="UPDATE complaint
SET status = 'Proceed'
WHERE compid = '$compid' ";

if ($con->query($sql) === TRUE) {
   // echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}



 



 if(mysqli_query($con,$sql))
 {
//echo ("Complaint Register");
//header("location:mein.html?err_feerecord");
//receipt generation
$sql1="select * from complaint where compid='$compid' ";
$result = mysqli_query($con, $sql1);
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

  }

  else
  {
      echo 'Registrationfailure';
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
<body bgcolor="#0099CC">
<div align="center">
<form id="form1">
  <table width="600" height="300" border="1"  >
  <tr><td colspan="2"><img src="/ecs/images/logo.jpeg" width="150" height="100" align="center"></tr>
  <h1 <caption><b>Complaint Confirmed Successfully!!!</b></caption> </h1>
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
<br>
<br>


<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
 <!-- Footer -->
  <footer class="py-5 bg-success">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; E-Complaint System 2022 by Nikhil Srivastava</p>
    </div>
</body>

</html>


