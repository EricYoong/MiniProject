<?php
session_start();
//error_reporting(0);
include 'include/config.php';
include 'include/checklogin.php';
check_login();
if (isset($_POST['submit'])) {
    $fname   = $_POST['fname'];
    $address = $_POST['address'];
    $city    = $_POST['city'];
    $gender  = $_POST['gender'];

    $sql = mysqli_query($con, "Update users set fullName='$fname',address='$address',city='$city',gender='$gender' where id='" . $_SESSION['pid'] . "'");
    if ($sql) {
        $msg = "Your Profile updated Successfully";

    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Patient Personal Report</title>
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
<style>
    table {
        width: 100%;
    }

    td {
        padding: 10px;
        border: 1px solid orange;
        margin: 0;
        width: 80%;
    }

    th {
        padding: 20px 0;
        margin: 0;
        margin-right: 100px;
    }

</style>

<body>
    <div id="app">
        <?php include 'include/sidebar.php';?>
        <div class="app-content">

            <?php include 'include/header.php';?>

            <!-- end: TOP NAVBAR -->
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    <!-- start: PAGE TITLE -->
                    <section id="page-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1 class="mainTitle">Patient Personal Report</h1>
                            </div>
                        </div>
                    </section>
                    <!-- end: PAGE TITLE -->
                    <!-- start: BASIC EXAMPLE -->
                    <div class="container-fluid container-fullw bg-white">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 style="color: green; font-size:18px; ">
                                    <?php if ($msg) {echo htmlentities($msg);}?>
                                </h5>
                                <div class="row margin-top-30">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-body">
                                                <?php
$sql = mysqli_query($con, "SELECT * FROM patienttb WHERE P_ID='" . $_SESSION['pid'] . "'");
while ($data = mysqli_fetch_array($sql)) {
    ?>
                                                <table>
                                                    <tr>
                                                        <th>
                                                            Patient Name :
                                                        </th>
                                                        <td>
                                                            <?php echo htmlentities($data['P_NAME']); ?>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Patient Address :
                                                        </th>
                                                        <td>
                                                            <?php echo htmlentities($data['P_ADDRESS']); ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Date Of Birth :
                                                        </th>
                                                        <td>
                                                            <?php echo htmlentities($data['P_DOB']); ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Gender :
                                                        </th>
                                                        <td>
                                                            <?php echo htmlentities($data['P_GENDER']); ?>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <th>
                                                            Diseases :
                                                        </th>



                                                        <td>
                                                            <?php
$sqli = mysqli_query($con, "SELECT DIA_DESCRIPTION FROM diagnosistb d INNER JOIN patienttb p ON d.P_ID=p.P_ID WHERE p.P_ID='" . $_SESSION['pid'] . "' ");

    while ($datas = mysqli_fetch_array($sqli)) {echo htmlentities($datas[0]);}
    ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Medicine :
                                                        </th>
                                                        <td>
                                                            <?php
$sqli = mysqli_query($con, "SELECT M_DESC FROM medical_billingtb m INNER JOIN patienttb p ON m.P_ID=p.P_ID WHERE p.P_ID='" . $_SESSION['pid'] . "' ");

    while ($datas = mysqli_fetch_array($sqli)) {echo htmlentities($datas[0]);}
    ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Date Admit :
                                                        </th>
                                                        <td>
                                                            <?php
$sqli = mysqli_query($con, "SELECT T_ADMITDATE FROM transactiontb t INNER JOIN patienttb p ON t.P_ID=p.P_ID WHERE p.P_ID='" . $_SESSION['pid'] . "' ");

    while ($datas = mysqli_fetch_array($sqli)) {echo htmlentities($datas[0]);}
    ?>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>
                                                            Date Discharged :
                                                        </th>
                                                        <td>
                                                            <?php
$sqli = mysqli_query($con, "SELECT T_DISCHARGEDATE FROM transactiontb t INNER JOIN patienttb p ON t.P_ID=p.P_ID WHERE p.P_ID='" . $_SESSION['pid'] . "' ");

    while ($datas = mysqli_fetch_array($sqli)) {echo htmlentities($datas[0]);}
    ?>
                                                        </td>
                                                    </tr>

                                                </table>
                                                <?php }?>
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
