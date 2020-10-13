<?php
session_start();
//error_reporting(0);
include 'include/config.php';
include 'include/checklogin.php';
if (isset($_POST['submit'])) {
    $docspecialization = $_POST['Doctorspecialization'];
    $docname           = $_POST['docname'];
    $docaddress        = $_POST['clinicaddress'];
    $docfees           = $_POST['docfees'];
    $doccontactno      = $_POST['doccontact'];
    $docemail          = $_POST['docemail'];
    $sql               = mysqli_query($con, "Update patienttb set specilization='$docspecialization',doctorName='$docname',address='$docaddress',docFees='$docfees',contactno='$doccontactno' where id='" . $_SESSION['id'] . "'");
    if ($sql) {
        echo "<script>alert('Doctor Details updated Successfully');</script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient | Edit Doctor Details</title>
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
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Patient | Edit Doctor Details</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Patient</span>
									</li>
									<li class="active">
										<span>Edit Patients Details</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">

									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Patient</h5>
												</div>
												<div class="panel-body">
									<?php $sql = mysqli_query($con, "select * from patienttb where U_ID='" . $_SESSION['dlogin'] . "'");
while ($data = mysqli_fetch_array($sql)) {
    ?>
													<form role="form" name="edit" method="post">


<div class="form-group">
															<label for="fname">
																 User Name
															</label>
	<input type="text" name="fname" class="form-control" value="<?php echo htmlentities($data['P_NAME']); ?>" >
														</div>


<div class="form-group">
															<label for="address">
																 Address
															</label>
					<textarea name="address" class="form-control"><?php echo htmlentities($data['P_ADDRESS']); ?></textarea>
														</div>
<div class="form-group">
															<label for="phone">
																 Phone
															</label>
		<input type="text" name="phone" class="form-control" required="required"  value="<?php echo htmlentities($data['P_PHONE']); ?>" >
														</div>

<div class="form-group">
									<label for="gender">
																Gender
															</label>
					<input type="text" name="gender" class="form-control" required="required"  value="<?php echo htmlentities($data['P_GENDER']); ?>">
														</div>

<div class="form-group">
									<label for="fess">
																 User Email
															</label>
					<input type="email" name="uemail" class="form-control"  readonly="readonly"  value="<?php echo htmlentities($data['U_ID']); ?>">
					<a href="change-emaild.php">Update your email id</a>
														</div>



														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Update
														</button>
													</form>
													<?php }?>
												</div>
											</div>
										</div>

											</div>
										</div>

								</div>

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
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
