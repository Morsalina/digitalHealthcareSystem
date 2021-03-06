<?php
session_start();
$conn = mysqli_connect('localhost','root','','hospital_management_system');
$sql= "SELECT * FROM register;";
$result = mysqli_query($conn, $sql);

if(!isset($_SESSION['user_login'])){
  header("Location:index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Covid Treatment</title>
    <link rel="icon" type="image/png" href="image/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="homepagePatient.css">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="hospital_demo1.html">
            <img src="image/brand.png" alt="Hospital logo" width="40px" height="30px">
          </a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutUs.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="service.php">Service</a></li>
          <li><a href="help.php">Help</a></li>
          <li><a href="covidInfo.php">Covid-19 Info</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li> <a href="myAccountPatient.php"> <span class="glyphicon glyphicon-user"></span> My account </a> </li>
          <li> <a href="logout.php"> <span class="glyphicon glyphicon-log-in"></span> Log out </a>  </li>
        </ul>
      </div>
    </nav>

    <div class="mainbody">
      <div class="container-fluid">
        <div class="row">
          <br><br>
          <div id="sidebar" class="col-md-4 bg-success">
            <ul class="list-unstyled">
              <li> <a id="option1" href="homepagePatient.php">Describe your problem</a> </li>
              <li> <a id="option1" href="searchDoctor.php">Search a specialist</a> </li>
              <li> <a id="option2" href="showDoctorList.php">Doctor's list</a> </li>
              <li> <a id="option3" href="manageAppointmentPatient.php">Make Appointment</a> </li>
              <li> <a id="option5" href="videoConfaPatient.php">Video Conference</a> </li>
              <li> <a id="option1" href="totalExpense.php">See your expenses</a> </li>
              <li> <a id="option1" href="medicineAndprescription.php">Request Medicine delivery</a> </li>
            </ul>
          </div>
          <div class="col-md-8 bg-danger">
            <form action="insertCovidInfo.php" method="post">
            <h3 class="text-info">Describe your problems</h3>
            <textarea name="prblm" class="form-control" rows="9"></textarea>
            <h4> Enter your username:</h4>
            <textarea name="uname" class="form-control" rows="4"></textarea>
            <button id="bttn" type="submit"  name="submit" class="btn btn-success">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container-fluid">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <strong>Follow us on</strong> <br>
              <ul class="list-unstyled">
                <li> <a href="https://web.facebook.com/morsalina.kowmi/"> Facebook</a> </li>
                <li> <a href="#"> Twitter</a> </li>
                <li> <a href="#"> Instagram</a> </li>
              </ul>
            </div>
            <div class="col-md-5">
              <strong>contact us </strong> <br>
              +123457 <br>
          </div>
          <div class="col-md-4">
            <ul>
              <li> <a href="FAQ.php"> FAQ </a> </li>
              <li> <a href="#">Send Feedback</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
