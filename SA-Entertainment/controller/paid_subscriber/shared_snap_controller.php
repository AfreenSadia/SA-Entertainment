<?php
require_once(__DIR__ . '/../../model/paid_subscriber/shared_snap_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

function getSharedSnap()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $share_snap = getSnapByUserEmail($loggedInUserEmail);

    return $share_snap;
}

?>

<!-- . -->