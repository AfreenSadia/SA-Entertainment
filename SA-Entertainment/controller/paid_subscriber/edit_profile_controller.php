<?php
require_once(__DIR__ . '/../../model/paid_subscriber/profile_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

$name = "";
$biography = "";
$picture = "";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['biography'])) {
    $biography = $_POST['biography'];
}

if (isset($_FILES['profilePicture'])) {
    $ext = strtolower(pathinfo($_FILES['profilePicture']['name'], PATHINFO_EXTENSION));

    if ($ext != "jpg" && $ext != "png") {
        echo "Only .jpg and .png files are allowed.";
    }

    $target_dir = "../../assets/paid_subscriber/uploads/profile_pictures/";
    $target_file = $target_dir . $_SESSION['userEmail'] . ".jpg";
    $src = $_FILES['profilePicture']['tmp_name'];

    move_uploaded_file($src, $target_file);
    $picture = $target_dir . $_SESSION['userEmail'];
}

$status = updateUser($_SESSION['userEmail'], $name, $biography, $picture);

if ($status) {
    header('location: ../../view/paid_subscriber/profile.php');
} else {
    header('location: ../../view/paid_subscriber/edit_profile.php?err=invalid_request');
}
?>

<!-- . -->