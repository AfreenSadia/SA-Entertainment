<?php
require_once(__DIR__ . '/../../model/content_creator/upload_tv_series_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
    header('location: ../../index.php?err=invalid_request');
}

$title = "";
$genre = "";
$file = "";
$isOpenForGenSub = "";
$uploadedBy = $_SESSION['userEmail'];
$uploadedAt = date("d-M-Y");

if (isset($_POST['title'])) {
    $title = $_POST['title'];
}

if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
}

if (isset($_POST['isOpenForGenSub'])) {
    $isOpenForGenSub = $_POST['isOpenForGenSub'];
}

if (isset($_FILES['seriesFile'])) {
    $ext = strtolower(pathinfo($_FILES['seriesFile']['name'], PATHINFO_EXTENSION));

    if ($ext != "mp4") {
        header('location: ../../view/content_creator/upload_tv_series.php?err=Only .mp4 files are allowed');
        return;
    }

    $target_dir = "../../assets/content_creator/uploads/tvseries/";
    $target_file = $target_dir . $_SESSION['userEmail'] . "_" . $title . ".mp4";
    $src = $_FILES['seriesFile']['tmp_name'];

    move_uploaded_file($src, $target_file);
    $file = $target_dir . $_SESSION['userEmail'] . "_" . $title;
}

$series = ['title' => $title, 'genre' => $genre, 'file' => $file, 'isOpenForGenSub' => $isOpenForGenSub, 'uploadedBy' => $uploadedBy, 'uploadedAt' => $uploadedAt];
$status = insertSeries($series);

if ($status) {
    header("Location: ../../view/content_creator/uploaded_tv_series.php");
} else {
    header('location: ../../view/content_creator/upload_tv_series.php?err=failed');
}
?>

<!-- . -->