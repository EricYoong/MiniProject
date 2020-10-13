<?php
session_start();
//error_reporting(0);
include 'include/config.php';
include 'include/checklogin.php';
include 'include/discharge.php';
check_login();

if (isset($_GET['requestDis'])) {
    if (addDischargeRequest($_GET['id'], $_SESSION['id'], 'S00001', $_SESSION['job'])) {
        $_SESSION['msg'] = "Success request!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>WardAdmin  | Dashboard</title>
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
									<h1 class="mainTitle">Ward Admin | Patient</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User </span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">


									<div class="row">
								<div class="col-md-12">

									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']); ?>
								<?php echo htmlentities($_SESSION['msg'] = ""); ?></p>
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th class="hidden-xs">Ward ID</th>
												<th>Patient ID</th>
												<th>Patient Name</th>
												<th>Request Discharge</th>



											</tr>
										</thead>
										<tbody>
<?php
$cnt   = 1;
$query = mysqli_query($con, "SELECT * FROM patienttb p INNER JOIN utilizationtb u ON p.P_ID = u.P_ID INNER JOIN wardstb w ON u.W_ID = w.W_ID WHERE w.W_MANAGER = 'S00006' AND w.W_ID = 'W00001'");
while ($sql3 = mysqli_fetch_assoc($query)) {

    ?>

											<tr>
												<td class="center"><?php echo $cnt; ?>.</td>
												<td class="hidden-xs"><?php echo $sql3['W_ID']; ?></td>
												<td><?php echo $sql3['P_ID']; ?></td>
												<td> <?php echo $sql3['P_NAME']; ?></td>

<?php

    $sql1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM discharge WHERE p_id = '" . $sql3['P_ID'] . "' AND disagree_discharge_time IS NULL AND agreed_discharge_time IS NULL"));
    if ($sql1 <= 0) {
        ?>

                                                <td><a href="patientwithward.php?id=<?php echo $sql3['P_ID'] ?>&requestDis=update" onClick="return confirm('Are you sure you want to request discharge ?')"class="btn btn-transparent btn-xs tooltips" title="Request Discharge" tooltip-placement="top" tooltip="Remove">Request</a></td>


											<?php

    } else {
        echo "<td>Requested</td>";
    }
    $cnt = $cnt + 1;
    ?>
    </tr>
    <?php
}?>


										</tbody>
									</table>
								</div>
							</div>
								</div>

						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->

					</div>
				</div>
			</div>
           //<?php
//    while($sql3 = mysqli_fetch_array(mysqli_query($con,  "SELECT * FROM patienttb p INNER JOIN utilizationtb u ON p.P_ID = u.P_ID INNER JOIN wardtb w ON u.W_ID = w.W_ID WHERE w.W_MANAGER =''"))){
//          print_r($sql3);
//        }?>
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
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
