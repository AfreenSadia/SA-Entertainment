<?php
require_once(__DIR__ . '/../../model/paid_subscriber/share_snap_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

$caption = "";
$file = "";
$uploadedBy = $_SESSION['userEmail'];
$uploadedAt = date("d-M-Y");
$isOpenForGenSub = "";

if (isset($_POST['caption'])) {
    $title = $_POST['caption'];
}
if (isset($_FILES['pictureFile'])) {
    $ext = strtolower(pathinfo($_FILES['pictureFile']['name'], PATHINFO_EXTENSION));

    if ($ext != "jpg" && $ext != "png") {
        echo "Only .jpg & png files are allowed.";
    }

    $target_dir = "../../assets/paid_subscriber/uploads/shared_snap/";
    $target_file = $target_dir . $_SESSION['userEmail'] . "_" . $title . ".jpg , .png";
    $src = $_FILES['pictureFile']['tmp_name'];

    move_uploaded_file($src, $target_file);
    $file = $target_dir . $_SESSION['userEmail'] . "_" . $title;
}

if (isset($_POST['isOpenForGenSub'])) {
    $isOpenForGenSub = $_POST['isOpenForGenSub'];
}
$share_snap = ['caption' => $caption, 'file' => $file,'uploadedBy' => $uploadedBy, 'uploadedAt' => $uploadedAt, 'isOpenForGenSub' => $isOpenForGenSub];
$status = insertSnap($share_snap);

if ($status) {
    header('location: ../../view/paid_subscriber/share_snap.php?msg=success');
} else {
    header('location: ../../view/paid_subscriber/share_snap.php?err=failed');
}
?>

<!-- . -->