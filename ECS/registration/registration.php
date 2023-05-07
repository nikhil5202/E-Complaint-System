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
  <nav class="navbar navbar-expand-lg border navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/ecs/">E-Complaint System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/ecs/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/ecs/login_user/user_login.html">User Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3 text-black mt-5 mb-2">
        <center>E-Complaint System</center>
      </h1>
      <p class="lead">
        <center>An Online Enquiry And E-Complaint System.<h3><b>Developed By: NIKHIL SRIVASTAVA </b></h3>
      <p>Email ID: srivasnikhil7570@gmail.com</p></center>
      </p>
    </header>


    <?php
    include 'db_connect.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $city = $_POST['city'];

    //echo $first_name.$last_name.$dob.$gender.$email.$phone.$pass.$city;
    //database

    $sql = "insert into user_reg (first_name,last_name,dob,gender,email,phone,pass,city)values('$first_name','$last_name','$dob','$gender','$email','$phone','$pass','$city')";


    if (mysqli_query($con, $sql)) {

      echo "<script type='text/javascript'>";
      echo "alert('Success')";
      echo "</script>";
    ?>

      <html>

      <head>
        <style>
          table {
            background-color: white;

          }

          .dash {
            border: 0 none;
            border-top: 2px dashed #322f32;
            background: white;
            color: white;
            height: 0;
          }
        </style>
      </head>

      <body bgcolor="#0099CC">
        <div align="center">
          <form id="form1">
            <table width="600" height="300" border="1">
              <tr>
                <td colspan="2"><img src="/ecs/images/logo.png" width="150" height="100" align="center">
              </tr>
              <h1 <caption><b>Registration Successful</b></caption>
                <h1>

                  <tr>
                    <th width="171" scope="row">First Name:</th>
                    <td width="260"><?php echo $first_name; ?></td>
                  </tr>
                  <tr>
                    <th width="171" scope="row">Last Name:</th>
                    <td width="260"><?php echo $last_name; ?></td>
                  </tr>
                  <tr>
                    <th width="171" scope="row">Dob:</th>
                    <td width="260"><?php echo $dob; ?></td>
                  </tr>
                  <tr>
                    <th width="171" scope="row">Gender:</th>
                    <td width="260"><?php echo $gender; ?></td>
                  </tr>
                  <tr>
                    <th width="171" scope="row">Phone:</th>
                    <td width="260"><?php echo $phone; ?></td>
                  <tr>
                    <th width="171" scope="row">Email:</th>
                    <td width="260"><?php echo $email; ?></td>
                  </tr>
                  </tr>
                  <tr>
                    <th width="171" scope="row">City:</th>
                    <td width="260"><?php echo $city; ?></td>
                  </tr>
                  <tr>
                    <td>
                      <input type="submit" name="Submit" value="Print" onClick="window.print()" />
                    </td>
                    <td>&nbsp;</td>
                  </tr>
            </table>

            <!-- <a class="button" href="user_dash.html">Home</a> -->
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

      </body>

      </ <?php
          //header("location:mein.html?err_feerecord");
          #  header("location:/ecs/login_user/user_login.html");
        } else {
          echo 'Registration failure';
        }
        mysqli_close($con);

          ?>