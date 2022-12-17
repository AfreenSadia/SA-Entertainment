<?php
require_once(__DIR__ . '/../db_conn.php');

function insertFavMusic($favMusic)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO music_list(MusicTitle, UserEmail) 
        VALUES ('{$favMusic['title']}','{$favMusic['email']}')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}

function getGenSubFavMusic($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM music_list WHERE UserEmail = '{$email}';";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
