<?php
require_once(__DIR__ . '/../../model/content_creator/delete_music_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
    header('location: ../../index.php?err=invalid_request');
}

$title = "";
$uploadedBy = $_SESSION['userEmail'];

if (isset($_GET['title'])) {
    $title = $_GET['title'];
}

$status = deleteMusic($title, $uploadedBy);

if ($status) {
    header("Location: ../../view/content_creator/uploaded_music.php?msg=delete success");
} else {
    header('location: ../../view/content_creator/uploaded_music.php?err=delete failed');
}
?>

<!-- . -->