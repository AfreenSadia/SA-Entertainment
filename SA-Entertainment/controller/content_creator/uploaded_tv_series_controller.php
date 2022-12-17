<?php
require_once(__DIR__ . '/../../model/content_creator/uploaded_tv_series_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
    header('location: ../../index.php?err=invalid_request');
}

function getUploadedSeries()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $series =  getSeriesByUserEmail($loggedInUserEmail);

    return $series;
}

?>

<!-- . -->