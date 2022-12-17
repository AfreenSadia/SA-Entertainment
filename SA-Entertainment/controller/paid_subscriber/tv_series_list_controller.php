<?php
require_once(__DIR__ . '/../../model/paid_subscriber/tv_seris_list_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

function getTvSeriesList()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $tv_seris_list =  getTvSeriesListByUserEmail($loggedInUserEmail);

    return $tv_seris_list;
}

?>

<!-- . -->