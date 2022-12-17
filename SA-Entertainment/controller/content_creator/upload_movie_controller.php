<?php
require_once(__DIR__ . '/../../model/content_creator/upload_movie_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'content_creator') {
    header('location: ../../index.php?err=invalid_request');
}

$title = "";
$author = "";
$genre = "";
$file = "";
$isOpenForGenSub = "";
$uploadedBy = $_SESSION['userEmail'];
$uploadedAt = date("d-M-Y");

if (isset($_POST['title'])) {
    $title = $_POST['title'];
}

if (isset($_POST['author'])) {
    $author = $_POST['author'];
}

if (isset($_POST['genre'])) {
    $genre = $_POST['genre'];
}

if (isset($_POST['isOpenForGenSub'])) {
    $isOpenForGenSub = $_POST['isOpenForGenSub'];
}

if (isset($_FILES['movieFile'])) {
    $ext = strtolower(pathinfo($_FILES['movieFile']['name'], PATHINFO_EXTENSION));

    if ($ext != "mp4") {
        header('location: ../../view/content_creator/upload_movie.php?err=Only .mp4 files are allowed');
        return;
    }

    $target_dir = "../../assets/content_creator/uploads/movies/";
    $target_file = $target_dir . $_SESSION['userEmail'] . "_" . $title . ".mp4";
    $src = $_FILES['movieFile']['tmp_name'];

    move_uploaded_file($src, $target_file);
    $file = $target_dir . $_SESSION['userEmail'] . "_" . $title;
}

$movie = ['title' => $title, 'author' => $author, 'genre' => $genre, 'file' => $file, 'isOpenForGenSub' => $isOpenForGenSub, 'uploadedBy' => $uploadedBy, 'uploadedAt' => $uploadedAt];
$status = insertMovie($movie);

if($status)
        {
            header("Location: ../../view/content_creator/uploaded_movie.php");
        }
        else 
        {
            header('location: ../../view/content_creator/upload_movie.php?err=failed');
        }

// if ($status) {
//     header('location: ../../view/content_creator/upload_book.php?msg=success');
// } else {
//     header('location: ../../view/content_creator/upload_book.php?err=failed');
// }
?>

<!-- . -->