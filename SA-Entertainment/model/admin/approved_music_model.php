<?php
require_once(__DIR__ . '/../db_conn.php');

function getMusicsByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM music WHERE IsActive = 'p';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
