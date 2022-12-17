<?php
require_once(__DIR__ . '/../db_conn.php');

function getPaidMusicsListByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM music WHERE IsOpenForGenSub = 'n';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
