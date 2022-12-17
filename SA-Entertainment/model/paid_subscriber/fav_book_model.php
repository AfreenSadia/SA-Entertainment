<?php
require_once(__DIR__ . '/../db_conn.php');

function insertFavBook($favBook)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO book_list(BookTitle, UserEmail) 
        VALUES ('{$favBook['title']}','{$favBook['email']}')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}

function getPaidSubFavBooks($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM book_list WHERE UserEmail = '{$email}';";
    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
