<?php
require_once(__DIR__ . '/../db_conn.php');

function getGamesByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM game WHERE IsActive = 'p';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
