<?php
require_once(__DIR__ . '/../../model/paid_subscriber/listened_musics_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

function getListenedMusicList()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $listened_music =  getListenedMusicListByUserEmail($loggedInUserEmail);

    return $listened_music;
}
?>

<!-- . -->