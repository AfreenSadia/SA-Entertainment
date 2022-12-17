<?php
require_once(__DIR__ . '/../../model/admin/total_content_creator_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'admin') {
    header('location: ../../index.php?err=invalid_request');
}

function getTotalContentCreator()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $total_Content_Creator =  getTotalContentCreatorByUserEmail($loggedInUserEmail);

    return $total_Content_Creator;
}

?>

<!-- . -->