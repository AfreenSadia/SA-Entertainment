<?php
require_once(__DIR__ . '/../../model/admin/delete_book_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'admin') {
    header('location: ../../index.php?err=invalid_request');
}

$title = "";
$uploadedBy = $_SESSION['userEmail'];

if (isset($_GET['title'])) {
    $title = $_GET['title'];
}

$status = deleteBook($title, $uploadedBy);

if ($status) {
    header("Location: ../../view/admin/approved_book.php?msg=delete success'");
} else {
    header("'location: ../../view/admin/approved_book.php?err=delete failed'");
}
?>

<!-- . -->