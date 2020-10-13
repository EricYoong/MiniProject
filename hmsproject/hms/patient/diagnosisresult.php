<?php
session_start();
//error_reporting(0);
include 'include/config.php';
include 'include/checklogin.php';
check_login();

if (isset($_POST['submit'])) {
    $specilization = $_POST['Doctorspecialization'];
    $doctorid      = $_POST['doctor'];
    $userid        = $_SESSION['id'];
    $fees          = $_POST['fees'];
    $appdate       = $_POST['appdate'];
    $time          = $_POST['apptime'];
    $userstatus    = 1;
    $docstatus     = 1;
    $query         = mysqli_query($con, "insert into appointment(doctorSpecialization,doctorId,userId,consultancyFees,appointmentDate,appointmentTime,userStatus,doctorStatus) values('$specilization','$doctorid','$userid','$fees','$appdate','$time','$userstatus','$docstatus')");
    if ($query) {
        echo "<script>alert('Your appointment successfully booked');</script>";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Book Appointment</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />




<link href="Dynatable/jquery.dynatable.css" rel="stylesheet">



	</head>
	<body>
		<div id="app">
<?php include 'include/sidebar.php';?>
			<div class="app-content">

						<?php include 'include/header.php';?>

				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Louise Lim | Diagnosis Result</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Book Appointment</span>
									</li>
                                </ol></div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
								<table id="myTable">

  <thead>

  <tr>
    <th>Disease Name</th>
    <th>Visited_Hospital_date</th>
      <th>Disease symptoms</th>
    <th>Doctor In-charge</th>
      <th>Medical Taken</th>
      <th>Total Bill</th>
      <th>Next Appointment with Doctor</th>
  </tr>
  </thead>
  <tbody>
      <!--<tr>
        <td>Fever, Headache</td>
          <td>2016-03-01</td>
          <td>Lee Zi Mao</td>
          <td>Paracetamol</td>
          <td>RM260.00</td>
          <td>No</td>
      </tr>
      <tr>
        <td></td>
          <td>2014-10-31</td>
          <td>Lee Zi Mao</td>
          <td>Naprosyn</td>
          <td>RM250.00</td>
          <td>No</td>
      </tr>
      <tr>
        <td></td>
          <td>2013-02-15</td>
          <td>Lee Zi Mao</td>
          <td>Painkiller</td>
          <td>RM100.00</td>
          <td>No</td>
      </tr>-->

  <?php

$sql = "SELECT d.DISEASE_NAME, d.DISEASE_SYMPTOMS FROM diseasetb d INNER JOIN diagnosistb dia ON d.DISEASE_ID = dia.DIA_DISEASEID WHERE dia.P_ID='P00001'";

if ($result = mysqli_query($con, $sql)) {
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>" . $row[0] . "</td><td>2014-04-05</td>
    <td>" . $row[1] . "</td><td>Eric Moon</td><td>Painkiller</td><td>RM260</td><td> No</td></tr>";
    }
    // Free result set
    mysqli_free_result($result);
}
?>
  </tbody>

</table>
						<!-- end: BASIC EXAMPLE -->






						<!-- end: SELECT BOXES -->

					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include 'include/footer.php';?>
			<!-- end: FOOTER -->

		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main1.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();



			});

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
		</script>
		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
        <script type="text/javascript" src="Dynatable/jquery.dynatable.js"></script>
        <script type="text/javascript">
    $('#myTable').dynatable({
  dataset:{
    perPageDefault: 3,
    perPageOptions: [3,4,6,8]
    }
    });
</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
