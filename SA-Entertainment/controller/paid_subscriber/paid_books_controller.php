<?php
require_once(__DIR__ . '/../../model/paid_subscriber/paid_books_model.php');

session_start();

if (!isset($_SESSION['userEmail']) && !isset($_SESSION['userType'])) {
    header('location: ../../index.php?err=invalid_request');
}

if ($_SESSION['userType'] != 'paid_subscriber') {
    header('location: ../../index.php?err=invalid_request');
}

function getPaidBookList()
{
    $loggedInUserEmail = $_SESSION['userEmail'];
    $book_list =  getPaidBookListByUserEmail($loggedInUserEmail);

    return $book_list;
}

?>

<!-- . -->