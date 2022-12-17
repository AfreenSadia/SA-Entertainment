<?php
require_once(__DIR__ . '/../../model/content_creator/upload_music_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
    header('location: ../../index.php?err=invalid_request');
}

$title = "";
$artist = "";
$genre = "";
$file = "";
$isOpenForGenSub = "";
$uploadedBy = $_SESSION['userEmail'];
$uploadedAt = date("d-M-Y");

if (isset($_POST['title'])) {
    $title = $_POST['title'];
}

if (isset($_POST['artist'])) {
    $artist = $_POST['artist'];
}

if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
}

if (isset($_POST['isOpenForGenSub'])) {
    $isOpenForGenSub = $_POST['isOpenForGenSub'];
}

if (isset($_FILES['musicFile'])) {
    $ext = strtolower(pathinfo($_FILES['musicFile']['name'], PATHINFO_EXTENSION));

    if ($ext != "mp3") {
        header('location: ../../view/content_creator/upload_music.php?err=Only .mp3 files are allowed');
        return;
    }

    $target_dir = "../../assets/content_creator/uploads/musics/";
    $target_file = $target_dir . $_SESSION['userEmail'] . "_" . $title . ".mp3";
    $src = $_FILES['musicFile']['tmp_name'];

    move_uploaded_file($src, $target_file);
    $file = $target_dir . $_SESSION['userEmail'] . "_" . $title;
}

$music = ['title' => $title, 'artist' => $artist, 'genre' => $genre, 'file' => $file, 'isOpenForGenSub' => $isOpenForGenSub, 'uploadedBy' => $uploadedBy, 'uploadedAt' => $uploadedAt];
$status = insertMusic($music);

if($status)
        {
            header("Location: ../../view/content_creator/uploaded_music.php");
        }
        else 
        {
            header('location: ../../view/content_creator/upload_music.php?err=failed');
        }

// if ($status) {
//     header('location: ../../view/content_creator/upload_book.php?msg=success');
// } else {
//     header('location: ../../view/content_creator/upload_book.php?err=failed');
// }
?>

<!-- . -->