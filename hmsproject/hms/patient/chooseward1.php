<?php
session_start();
//error_reporting(0);
include 'include/config.php';
include 'include/checklogin.php';
check_login();

if (isset($_POST['submit'])) {
    $selward = $_POST['ward'];
    $query   = mysqli_query($con, "update wardstb set w_occupy= w_occupy+1 where w_type='$selward'");
    if ($query) {
        echo "<script>alert('Submit successfully');</script>";

    }

}

?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient  | Choose Ward</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../vendor/themify-icons/themify-icons.min.css">
		<link href="../vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="../vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="../vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="../vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="../vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="../vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="../vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="../assets/css/styles.css">
		<link rel="stylesheet" href="../assets/css/plugins.css">
		<link rel="stylesheet" href="../assets/css/themes/theme-1.css" id="skin_color" />

<link href="../Dynatable/jquery.dynatable.css" rel="stylesheet">

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
									<h1 class="mainTitle">Patient | Choose Ward</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Patient</span>
									</li>
									<li class="active">
										<span>Choose Ward</span>
									</li>
                                </ol></div>
						</section>
                  <figure>
                <img src="10%20bedded.png" alt="10 bedded ward" width="800" height="500">
                      <figcaption><h3>10 bedded ward </h3></figcaption>
                       </figure>
                         <br/>
                       <figure>
                <img src="6-Bedded.jpg" alt="6 bedded ward" width="800" height="500">
                           <figcaption><h3>6 bedded ward </h3></figcaption>
                       </figure>
                         <br/>
                        <figure>
                <img src="4_bedded.jpg" alt="4 bedded ward" width="800" height="500">
                            <figcaption><h3>4 bedded ward </h3></figcaption>
                       </figure>
                      <br/>
                              <figure>
                <img src="Health_City_Double_Patient_Bedroom_3.jpg" alt="Double room" width="800" height="500">
                                  <figcaption><h3>Double room </h3></figcaption>
                       </figure>
                        <br/>
                              <figure>
                <img src="Isolation-Room.jpg" alt="isolation room" width="800" height="500">
                      <figcaption><h3>Isolation room </h3></figcaption>
                       </figure>
                         <br/>
 <table id="WardTable">

<thead>

  <tr>
    <th>Wards Type</th>
    <th>Wards Price</th>

      <th>Available</th>

  </tr>
  </thead>
  <tbody>

 <?php

$sql = "SELECT w_type,w_price,w_capacity,w_occupy FROM wardstb";

if ($result = mysqli_query($con, $sql)) {
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td>
    <td>" . ($row[2] - $row[3]) . "</td></tr>";

    }
    // Free result set
    mysqli_free_result($result);
}
?>
  </tbody>

</table>

<br/>


 <form action="chooseward1.php" method="POST" name="chooseward">
<h4>Choose your favourite ward</h4>
     <input type="radio" name="ward" value="10 bedded">10 bedded room<br>
     <input type="radio" name="ward" value="6 bedded">6 bedded room<br>
     <input type="radio" name="ward" value="4 bedded">4 bedded room<br>
     <input type="radio" name="ward" value="Double roo" disabled>Double room<br>
     <input type="radio" name="ward" value="Isolation" disabled>Isolation<br><br>

    <button type="submit" name="submit" class="btn btn-o btn-primary">Submit
</button>

    </form>

             </div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include 'include/footer.php';?>
			<!-- end: FOOTER -->

			<!-- start: SETTINGS -->
	<?php include 'include/setting.php';?>

			<!-- end: SETTINGS -->
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
		<script src="assets/js/main.js"></script>
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
        <script type="text/javascript" src="../Dynatable/jquery.dynatable.js"></script>
        <script type="text/javascript">
    $('#WardTable').dynatable({
  dataset:{
    perPageDefault: 3,
    perPageOptions: [3,4,6,8]
    }
    });
</script>


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>