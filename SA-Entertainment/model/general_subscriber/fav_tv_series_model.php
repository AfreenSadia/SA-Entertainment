<?php
require_once(__DIR__ . '/../db_conn.php');

function insertFavTvSeries($favTvSeries)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO series_list(SeriesTitle, UserEmail) 
        VALUES ('{$favTvSeries['title']}','{$favTvSeries['email']}')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}

function getGenSubFavTvSeries($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM series_list WHERE UserEmail = '{$email}';";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
