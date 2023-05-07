<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">  
  <meta name="author" content="">

  <title>E-Complaint System</title>

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

  <header class="py-5 mb-5" style="background-color: #99ff99 ;">
    <div class="container h-100" >
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-success font-italic  font-weight-bold  mt-5 mb-2">E-Complaint System</h1>
          <p class="lead mb-5 text-dark">An Online Enquiry And E-Complaint System. </p>
          <h3><b>Developed By: NIKHIL SRIVASTAVA </b></h3>
          <p>Email ID: srivasnikhil7570@gmail.com</p>
        </div>
      </div>
    </div>
  </header>
<script>
function showUser(str) {
	
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}
</script></head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a Department:</option> 
		<option value="Agriculture">Agriculture</option>
        <option value="Animal Husbandry & Fisheries">Animal Husbandry & Fisheries</option>
        <option value="Disaster Management">Disaster Management</option>
        <option value="Excise Department">Excise Department</option>
		<option value="Finance">Finance</option>
        <option value="Food & Consumer Protection">Food & Consumer Protection</option>
        <option value="Forest">Forest</option>
        <option value="Railway">Railway</option>
		<option value="Welfare">Welfare</option>
        <option value="Youth, Art & Culture">Youth, Art & Culture</option>
        <option value="Telecommunications">Telecommunications</option>
        <option value="Eduction">Eduction</option>
		<option value="Electricity">Electricity</option>
        <option value="election commission">Election commission</option>
        <option value="Ministry of Home Affairs">Ministry of Home Affairs</option>
      </select>
</form>
<br>
<div id="txtHint"><b>Complaint info will be listed here.</b></div>
<br><br>


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
	</footer> 
</body>
</html>
