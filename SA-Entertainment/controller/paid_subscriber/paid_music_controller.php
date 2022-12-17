<?php
require_once(__DIR__ . '/../../model/paid_subscriber/paid_music_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

function getPaidMusicsList()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $music_list =  getPaidMusicsListByUserEmail($loggedInUserEmail);

    return $music_list;
}

?>

<!-- . -->