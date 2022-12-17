<?php
require_once(__DIR__ . '/../db_conn.php');

function getPaidGameListByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM game WHERE IsOpenForGenSub = 'n';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
