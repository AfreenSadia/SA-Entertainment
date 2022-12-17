<?php
require_once(__DIR__ . '/../db_conn.php');

function insertFavMovie($favMovie)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO movie_list(MovieTitle, UserEmail) 
        VALUES ('{$favMovie['title']}','{$favMovie['email']}')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}

function getGenSubFavMovies($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM movie_list WHERE UserEmail = '{$email}';";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
