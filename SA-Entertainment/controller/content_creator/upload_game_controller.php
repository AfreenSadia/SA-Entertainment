<?php
require_once(__DIR__ . '/../../model/content_creator/upload_game_model.php');

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

if (isset($_FILES['gameFile'])) {
    $ext = strtolower(pathinfo($_FILES['gameFile']['name'], PATHINFO_EXTENSION));

    if ($ext != "zip") {
        header('location: ../../view/content_creator/upload_game.php?err=Only .zip files are allowed');
        return;
    }

    $target_dir = "../../assets/content_creator/uploads/games/";
    $target_file = $target_dir . $_SESSION['userEmail'] . "_" . $title . ".zip";
    $src = $_FILES['gameFile']['tmp_name'];

    move_uploaded_file($src, $target_file);
    $file = $target_dir . $_SESSION['userEmail'] . "_" . $title;
}

$game = ['title' => $title, 'genre' => $genre, 'file' => $file, 'isOpenForGenSub' => $isOpenForGenSub, 'uploadedBy' => $uploadedBy, 'uploadedAt' => $uploadedAt];
$status = insertGame($game);

if($status)
        {
            header("Location: ../../view/content_creator/uploaded_game.php");
        }
        else 
        {
            header('location: ../../view/content_creator/upload_game.php?err=failed');
        }

// if ($status) {
//     header('location: ../../view/content_creator/upload_book.php?msg=success');
// } else {
//     header('location: ../../view/content_creator/upload_book.php?err=failed');
// }
?>

<!-- . -->