<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "e-complain";
try {
  $con = new PDO("mysql:host=$mysql_db_hostname;dbname=$mysql_db_database", "$mysql_db_user", "$mysql_db_password");
} catch (PDOExection $e) {
  echo $e->getMessage();
}
//
$sql = "select id,name from country where id =101";
$stmt = $con->prepare($sql);
$stmt->execute();
$arrCountry = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Colorlib Templates">
  <meta name="author" content="Colorlib">
  <meta name="keywords" content="Colorlib Templates">


  <!-- Title Page-->
  <title>E-Complaint System</title>

  <!-- Icons font CSS-->
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <!-- Font special for pages-->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

  <!-- Vendor CSS-->
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark border bg-success  fixed-top">
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Complaint Form</a>
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
  <br><br><br>
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-3">
      <h1 class="display-2 text-black mt-5 mb-3">
        <center>E-Complaint System</center>
      </h1>
      <h3><b>Developed By: NIKHIL SRIVASTAVA </b></h3>
      <p>Email ID: srivasnikhil7570@gmail.com</p>
      <p class="lead">
        <center>Post your Complaint.</center>
      </p>
    </header>

    <!--Start-->
    <div class="page-wrapper bg-green p-t-100 p-b-100 font-robo">
      <div class="wrapper wrapper--w680">
        <div class="card card-1">
          <div class="card-heading"></div>
          <div class="card-body">
            <h2 class="title">Complaint Form</h2>
            <form method="POST" action="user_comp.php">

              <div class="input-group">
                <div class="rs-select2 js-select-simple select--no-search">
                  <label for="country">Country</label>
                  <select class="form-control" id="country" name="country">
                    <option value="-1">Select Country</option>
                    <?php
                    foreach ($arrCountry as $country) {
                    ?>
                      <option value="<?php echo $country['id'] ?>"><?php echo $country['name'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                  <div class="select-dropdown"></div>
                </div>
              </div>

              <div class="input-group">
                <div class="rs-select2 js-select-simple select--no-search">
                  <label for="state">State</label>
                  <select class="form-control" id="state" name="state">
                    <option>Select State</option>
                  </select>
                  <div class="select-dropdown"></div>
                </div>
              </div>

              <div class="input-group">
                <div class="rs-select2 js-select-simple select--no-search">
                  <label for="city">City</label>
                  <select class="form-control" id="city" name="city">
                    <option>Select City</option>
                  </select>
                  <div class="select-dropdown"></div>
                </div>
              </div>

              <div class="input-group">
                <div class="rs-select2 js-select-simple select--no-search">
                  <label for="dep">Department</label>
                  <select class="form-control" id="dep" name="dep">
                    <option>Select Department</option>
                    <option>Agriculture</option>
                    <option>Animal Husbandry & Fisheries</option>
                    <option>Disaster Management</option>
                    <option>Excise Department</option>
                    <option>Finance</option>
                    <option>Food & Consumer Protection</option>
                    <option>Forest</option>
                    <option>Railway</option>
                    <option>Welfare</option>
                    <option>Youth, Art & Culture</option>
                    <option>Telecommunications</option>
                    <option>Eduction</option>
                    <option>Electricity</option>
                    <option>Election commission</option>
                    <option>Ministry of Home Affairs</option>
                  </select>
                  <div class="select-dropdown"></div>
                </div>
              </div>


              <div class="input-group">
						 <div class="rs-select2 js-select-simple select--no-search">
                         <textarea class="input--style-1" name="msg" placeholder="Complaint Message" rows="3">
						 </textarea>
						 </div>
						 </div>

              <div class="p-t-20">
                <button class="btn btn--radius btn--green" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

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

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <script>
      $(document).ready(function() {
        jQuery('#country').change(function() {
          var id = jQuery(this).val();
          if (id == '-1') {
            jQuery('#state').html('<option value="-1">Select State</option>');
          } else {
            $("#divLoading").addClass('show');
            jQuery('#state').html('<option value="-1">Select State</option>');
            jQuery('#city').html('<option value="-1">Select City</option>');
            jQuery.ajax({
              type: 'post',
              url: 'get_data.php',
              data: 'id=' + id + '&type=state',
              success: function(result) {
                $("#divLoading").removeClass('show');
                jQuery('#state').append(result);
              }
            });
          }
        });
        jQuery('#state').change(function() {
          var id = jQuery(this).val();
          if (id == '-1') {
            jQuery('#city').html('<option value="-1">Select City</option>');
          } else {
            $("#divLoading").addClass('show');
            jQuery('#city').html('<option value="-1">Select City</option>');
            jQuery.ajax({
              type: 'post',
              url: 'get_data.php',
              data: 'id=' + id + '&type=city',
              success: function(result) {
                $("#divLoading").removeClass('show');
                jQuery('#city').append(result);
              }
            });
          }
        });
      });
    </script>
</body>

</html>