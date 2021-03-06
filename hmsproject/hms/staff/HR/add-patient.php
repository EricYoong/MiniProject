<?php
session_start();
//error_reporting(0);
include 'include/config.php';
include 'include/checklogin.php';
check_login();

if (isset($_POST['submit'])) {
    $pname    = $_POST['pname'];
    $paddress = $_POST['paddress'];
//$pcity=$_POST['pcity'];
    $pdob     = $_POST['pdob'];
    $phone    = $_POST['pphone'];
    $pgender  = $_POST['pgender'];
    $pmail    = $_POST['pemail'];
    $password = md5($_POST['npass']);
    $sql      = mysqli_query($con, "insert into patienttb(P_ID,U_ID,P_PASSWORD,P_NAME,P_GENDER,P_DOB,P_PHONE,P_ADDRESS) values('$pmail','$pmail','$password','$pname','$pgender','$pdob','$phone','$paddress')");
    if ($sql) {
        echo "<script>alert('Patient info added Successfully');</script>";
        header('location:manage-users.php');

    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HR | Add Patient</title>
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
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>

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
									<h1 class="mainTitle">HR | Add Patient</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>HR</span>
									</li>
									<li class="active">
										<span>Add Patient</span>
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
													<h5 class="panel-title">Add Patient</h5>
												</div>
												<div class="panel-body">

													<form role="form" name="addpatient" method="post" onSubmit="return valid();">


<div class="form-group">
															<label for="patientname">
																 Patient Name
															</label>
					<input type="text" name="pname" class="form-control"  placeholder="Enter Patient Name" required="required">
														</div>


<div class="form-group">
															<label for="address">
																Patient Address
															</label>
					<textarea name="paddress" class="form-control"  placeholder="Enter Patient Address" required="required"></textarea>
														</div>
<div class="form-group">
															<label for="city">
																 Patient City
															</label>
					<input type="text" name="pcity" class="form-control"  placeholder="Enter Patient city" required="required">
														</div>
            <div class="form-group">
				<label for="dateofbirth">Date of Birth</label>
					<input type="date" name="pdob" class="form-control">
			</div>
            <div class="form-group">
				<label for="pphoneh">Phone</label>
					<input type="tel" name="phone" class="form-control" pattern="[0-9]{10}">
			</div>

<div class="form-group">
									<label for="gender">
																 Patient Gender
															</label>
					<select name="pgender" class="form-control" required="required">
																<option value="">Select Patient Gender</option>
                                                                <option value="Male">Male</option>
                        <option value="Female">Female</option></select>

														</div>

<div class="form-group">
									<label for="pemail">
																 Patient Email
															</label>
					<input type="email" name="pemail" class="form-control"  placeholder="Enter Patient Email" required="required">
														</div>




														<div class="form-group">
															<label for="exampleInputPassword1">
																 Password
															</label>
					<input type="password" name="npass" class="form-control password"  placeholder="At least 6 character" required="required" pattern=".{6,}">
														</div>

<div class="form-group">
															<label for="exampleInputPassword2">
																Confirm Password
															</label>
									<input type="password" name="cfpass" class="form-control password"  placeholder="At least 6 character" required="required" pattern=".{6,}">
														</div>



														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>

											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">


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
