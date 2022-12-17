<?php
require_once(__DIR__ . '/../../model/admin/approve_tv_series_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'admin') {
    header('location: ../../index.php?err=invalid_request');
}

$title = "";
$uploadedBy = $_SESSION['userEmail'];

if (isset($_GET['title'])) {
    $title = $_GET['title'];
}

$status = updateTvSeries($title, $uploadedBy);

if ($status) {
    header("Location: ../../view/admin/approved_tv_series.php?msg=approved successfully");
} else {
    header('location: ../../view/admin/approved_tv_series.php?err=approval failed');
}
?>

<!-- . -->