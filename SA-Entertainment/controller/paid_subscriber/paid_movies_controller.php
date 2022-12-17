<?php
require_once(__DIR__ . '/../../model/paid_subscriber/paid_movies_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

function getPaidMoviesList()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $movie_list =  getPaidMoviesListByUserEmail($loggedInUserEmail);

    return $movie_list;
}

?>

<!-- . -->