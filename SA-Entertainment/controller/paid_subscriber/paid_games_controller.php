<?php
require_once(__DIR__ . '/../../model/paid_subscriber/paid_game_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

function getPaidGameList()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $game_list =  getPaidGameListByUserEmail($loggedInUserEmail);

    return $game_list;
}

?>

<!-- . -->