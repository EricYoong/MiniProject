<?php
session_start();
//error_reporting(0);
include 'include/config.php';
include 'include/checklogin.php';
check_login();

if (isset($_POST['submit'])) {
//$sdepart = $_POST['sdepart'];
    $sname    = $_POST['sname'];
    $saddress = $_POST['saddress'];
//$scontactno=$_POST['scontact'];
    $password          = md5($_POST['npass']);
    $uid               = $_POST['docemail'];
    $sgender           = $_POST['sgender'];
    $sjob              = $_POST['sjob'];
    $slevel            = $_POST['slevel'];
    $sworkhour         = $_POST['sworkhour'];
    $ssalary           = $_POST['ssalary'];
    $sdob              = $_POST['sdob'];
    $docspecialization = $_POST['Doctorspecialization'];

    $sql = mysqli_query($con, "insert into stafftb(S_ID,U_ID,S_PASSWORD,D_ID,S_NAME,S_PHONE,S_ADDRESS,S_GENDER,S_JOB,S_LEVEL,S_WORKHOUR,S_SALARY,S_DOB,specilization)values
('$uid','$uid','$password','D00002','$sname','0129759715','$saddress','$sgender','$sjob','$slevel','$sworkhour','$ssalary','$sdob','$docspecialization')");
    if ($sql) {
        echo "<script>alert('Doctor info added Successfully');</script>";
        header('location:manage-doctors.php');

    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>HR | Add Staff</title>
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
									<h1 class="mainTitle">HR | Add Staff</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>HR</span>
									</li>
									<li class="active">
										<span>Add Staff</span>
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
													<h5 class="panel-title">Add Staff</h5>
												</div>
												<div class="panel-body">

													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="SDepartment">
																Staff Department
															</label>
							<select name="Staff Department" class="form-control" required="required">
							<option value="">Select Department</option><?php $ret = mysqli_query($con, "select * from departmenttb");while ($row = mysqli_fetch_array($ret)) {?>
							<option value="<?php echo htmlentities($row['D_NAME']); ?>">
							<?php echo htmlentities($row['D_NAME']); ?>
							</option>
							<?php }?>

															</select>
														</div>

<div class="form-group">
															<label for="Staffname">
																 Staff Name
															</label>
					<input type="text" name="sname" class="form-control"  placeholder="Enter Staff Name">
														</div>


<div class="form-group">
															<label for="saddress">
																 Staff Address
															</label>
					<textarea name="saddress" class="form-control"  placeholder="Enter Staff Address"></textarea>
														</div>
                                                       <!--<div class="form-group">
															<label for="phone">
																 Staff Phone
															</label>
					<input type="tel" name="scontact" class="form-control"  placeholder="Enter of phone" pattern="[0-9]{9}">
														</div>-->
<div class="form-group">
															<label for="password">
																 Password
															</label>
					<input type="password" name="npass" class="form-control"  placeholder="Password 6 character minimum!" pattern=".{6,}">
														</div>

<div class="form-group">
									<label for="fess">
																 Email
															</label>
					<input type="email" name="docemail" class="form-control"  placeholder="Enter Email">
														</div>

<div class="form-group">
									<label for="sgender">
																 Gender
															</label>
					<input type="text" name="sgender" class="form-control"  placeholder="Enter Gender ">
														</div>




														<div class="form-group">
															<label for="job">
																 Job :
															</label>
					<select name="sjob">
                        <option value="Doctor">Doctor</option>
                        <option value="Nurse">Nurse</option>
                        <option value="HR">HR</option>
                        <option value="WardAdmin">WardAdmin</option>
                        <option value="Manager">Manager</option>
                    </select>
														</div>

<div class="form-group">
															<label for="Level">
																 Level :
															</label>
					<select name="slevel">
                        <option value="Manager">Manager</option>
                        <option value="Employee">Employee</option>
                        <option value="Assistant">Assistant</option>

                    </select>
														</div>
                                                        <div class="form-group">
									<label for="wh">
																 WorkHour
															</label>
					<input type="time" name="sworkhour" class="form-control"  placeholder="Enter Working Hours ">
														</div>
														<div class="form-group">
									<label for="salary">
																 Salary
															</label>
					<input type="number" name="ssalary" class="form-control"  placeholder="Enter Salary ">
														</div>
                                                        <div class="form-group">
									<label for="dob">
																 Date of Birth
															</label>
					<input type="date" name="sdob" class="form-control" >
														</div>
                                                        <div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
							<select name="Doctorspecialization" class="form-control" required="required">
																<option value="">Select Specialization</option>
<?php $ret = mysqli_query($con, "select * from doctorspecilization");
while ($row = mysqli_fetch_array($ret)) {
    ?>
																<option value="<?php echo htmlentities($row['specilization']); ?>">
																	<?php echo htmlentities($row['specilization']); ?>
																</option>
																<?php }?>

															</select>
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
