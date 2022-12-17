<?php
require_once(__DIR__ . '/../../model/admin/total_user_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'admin') {
    header('location: ../../index.php?err=invalid_request');
}

function getTotalUser()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $total_user =  getTotalUserByUserEmail($loggedInUserEmail);

    return $total_user;
}

?>

<!-- . -->