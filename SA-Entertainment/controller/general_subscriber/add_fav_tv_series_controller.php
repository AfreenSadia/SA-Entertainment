<?php
require_once(__DIR__ . '/../../model/general_subscriber/fav_tv_series_model.php');

$data  = $_POST['json'];
$fav = json_decode($data);

$title = $fav->title;
$email = $fav->email;

if ($title == null) {
    echo "Title is required";
}

if ($email == null) {
    echo "Email is required";
}

$favTvSeries = ['title' => $title, 'email' => $email];

$status = insertFavTvSeries($favTvSeries);

if ($status) {
    echo "Added to favorite!";
} else {
    echo "Failed to add as favorite!";
}
?>

<!-- . -->