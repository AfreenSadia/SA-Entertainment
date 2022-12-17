<?php
require_once(__DIR__ . '/../db_conn.php');

function getMusicListByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM music;";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
