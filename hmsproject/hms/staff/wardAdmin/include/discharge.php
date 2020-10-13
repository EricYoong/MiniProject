<?php
include 'config.php';

function checkDischargeRequest($p_id)
{
    global $con;
    $query     = "SELECT * FROM discharge WHERE p_id = '$p_id' AND (disagree_discharge_time IS NULL AND agreed_discharge_time IS NULL)";
    $result    = mysqli_query($con, $query);
    $docOrWard = mysqli_fetch_assoc($result);
    if ($docOrWard > 0) {
        return checkValidity($docOrWard);
    } else {
        return false;
    }
}

function checkValidity($result)
{
    global $con;
    $query  = "SELECT * FROM discharge WHERE p_id = '$p_id' AND (disagree_discharge_time IS NULL AND agreed_discharge_time IS NULL)";
    $result = mysqli_query($con, $query);
    $num    = mysqli_fetch_assoc($result);

    if ($num['doctor_status'] == 1) {
        return 'D';
    } else {
        return 'WA';
    }
}

function addDischargeRequest($p_id, $ward_admin, $doctor_id, $sessionID)
{
    global $con;
    if (checkDischargeRequest($p_id, $con) == "D" || checkDischargeRequest($p_id, $con) == "WA") {
        return false;
    } else {
        $query  = "insert into discharge(p_id, user_id, doctor_id, wardAdmin_status) values('$p_id','$ward_admin','$doctor_id', '1')";
        $result = mysqli_query($con, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}

function acceptDischargeRequest($p_id)
{
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $ldate  = date('Y-m-d H:i:s', time());
    $query  = "UPDATE discharge SET doctor_status = '1' WHERE p_id = '$p_id' AND agreed_discharge_time IS NULL AND disagree_discharge_time IS NULL;UPDATE discharge SET agreed_discharge_time = '$ldate' WHERE p_id = '$p_id'AND agreed_discharge_time IS NULL AND disagree_discharge_time IS NULL;";
    $result = mysqli_query($con, $query);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

function declineDischargeRequest($p_id)
{
    global $con;
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $ldate  = date('Y-m-d H:i:s', time());
    $result = mysqli_query($con, "UPDATE discharge SET disagree_discharge_time = '$ldate' WHERE p_id = '$p_id' AND agreed_discharge_time IS NULL AND disagree_discharge_time IS NULL");
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// if (addDischargeRequest('U0001', 'W0002', 'D0002', $con, 'S00001')) {
//     echo "success";
// }

$query = mysqli_query($con, "SELECT * FROM medical_billingtb WHERE P_ID = 'P00001' AND paid_status = 'Not Paid'");
$num   = mysqli_num_rows($query);
// $nestedArray = array(mysqli_fetch_row($query));
// print_r($nestedArray);

// print_r(mysqli_fetch_assoc($query));
// $nestedArray = array();
// while ($row = mysqli_fetch_assoc($query)) {
//     array_push($nestedArray, $row);
// }

// print_r($nestedArray[0]['M_PRICE']);
// print_r($num);

// $query = mysqli_query($con, "SELECT * FROM discharge WHERE p_id = 'P00001' AND disagree_discharge_time IS NULL AND agreed_discharge_time IS NULL");
// print_r($query);
// $num = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM discharge WHERE p_id = 'P00001' AND disagree_discharge_time IS NULL AND agreed_discharge_time IS NULL"));
// print_r($num);
// if ($num <= 0) {
//     echo 'Hi';
// }

// $query  = "SELECT * FROM discharge WHERE disagree_discharge_time IS NULL";
// $result = mysqli_query($con, $query);
// $num    = mysqli_fetch_assoc($result);
// print_r($num);

// date_default_timezone_set('Asia/Kuala_Lumpur');
// $ldate = date('His', time());
// print_r('U0001' . $ldate);
date_default_timezone_set('Asia/Kuala_Lumpur');
$ldate  = date('Y-m-d H:i:s', time());
$query  = mysqli_query($con, "SELECT * FROM patienttb p INNER JOIN utilizationtb u ON p.P_ID = u.P_ID INNER JOIN wardstb w ON u.W_ID = w.W_ID WHERE w.W_MANAGER = 'S00006' AND w.W_ID = 'W00001'");
$result = mysqli_query($con, $query);
