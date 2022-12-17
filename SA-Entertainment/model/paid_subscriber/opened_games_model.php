<?php
require_once(__DIR__ . '/../db_conn.php');

function getOpenedGameListByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM game WHERE IsOpened = 'y';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
