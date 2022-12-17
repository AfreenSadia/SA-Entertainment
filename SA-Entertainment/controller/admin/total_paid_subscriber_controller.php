<?php
require_once(__DIR__ . '/../../model/admin/total_paid_subscriber_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'admin') {
    header('location: ../../index.php?err=invalid_request');
}

function getTotalPaidSubscriber()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $total_paid_subscriber =  getTotalPaidSubscriberByUserEmail($loggedInUserEmail);

    return $total_paid_subscriber;
}

?>

<!-- . -->