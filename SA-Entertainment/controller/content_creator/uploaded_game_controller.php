<?php
require_once(__DIR__ . '/../../model/content_creator/uploaded_game_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
    header('location: ../../index.php?err=invalid_request');
}

function getUploadedGames()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $game =  getGamesByUserEmail($loggedInUserEmail);

    return $game;
}

?>

<!-- . -->