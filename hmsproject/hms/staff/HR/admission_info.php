<?php
session_start();
//error_reporting(0);
include 'include/config.php';
include 'include/checklogin.php';
check_login();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HR  | Admission Request</title>
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




<link href="../../Dynatable/jquery.dynatable.css" rel="stylesheet">

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
									<h1 class="mainTitle">HR | Admission Request</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>HR</span>
									</li>
									<li class="active">
										<span>Admission Request</span>
									</li>
                                </ol></div>
						</section>
 <table id="admissionTable">

  <thead>

  <tr>
    <th>Admission ID</th>
    <th>Patient Name</th>
    <th>Patient Date of Birth</th>
      <th>Patient Phone</th>
      <th>Patient Address</th>
      <th>Patient Medical Condition</th>
      <th>Contact Person Name</th>
      <th>Contact Person Phone</th>
      <th>Contact Person Relationship</th>
      <th>Admission Date</th>
  </tr>
  </thead>
  <tbody>

          <?php

$sql = "SELECT * FROM admissiontb";

if ($result = mysqli_query($con, $sql)) {
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td>
    <td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] . "</td><td>" . $row[5] . "</td><td>" . $row[6] . "</td><td>" . $row[7] . "</td><td>" . $row[8] . "</td><td>" . $row[9] . "</td><th><a><u>approve</u></a></th><th><a><u>reject</u></a></th></tr>";

    }
    // Free result set
    mysqli_free_result($result);
}
?>
  </tbody>

</table>
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
        $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
		</script>
		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
        <script type="text/javascript" src="../../Dynatable/jquery.dynatable.js"></script>
        <script type="text/javascript">
    $('#admissionTable').dynatable({
  dataset:{
    perPageDefault: 3,
    perPageOptions: [3,4,6,8]
    }
    });
</script>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
