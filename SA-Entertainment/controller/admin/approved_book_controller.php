<?php
require_once(__DIR__ . '/../../model/admin/approved_book_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'admin') {
    header('location: ../../index.php?err=invalid_request');
}

function getUploadedBooks()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $books =  getBooksByUserEmail($loggedInUserEmail);

    return $books;
}

?>

<!-- . -->