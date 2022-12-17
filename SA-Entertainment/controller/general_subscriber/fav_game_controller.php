<?php
require_once(__DIR__ . '/../../model/general_subscriber/fav_game_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'general_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

function getGeneralSubscriberFavGames()
{
    $games =  getGenSubFavGames($_SESSION['userEmail']);
    return $games;
}

?>

<!-- . -->