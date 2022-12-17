<?php
require_once(__DIR__ . '/../db_conn.php');

function getPaidMoviesListByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM movie WHERE IsOpenForGenSub = 'n';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
