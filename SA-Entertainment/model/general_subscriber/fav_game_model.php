<?php
require_once(__DIR__ . '/../db_conn.php');

function insertFavGame($favGame)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO game_list(GameTitle, UserEmail) 
        VALUES ('{$favGame['title']}','{$favGame['email']}')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}

function getGenSubFavGames($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM game_list WHERE UserEmail = '{$email}';";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
