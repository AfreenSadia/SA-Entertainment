<?php
require_once(__DIR__ . '/../db_conn.php');

function getTotalUserByUserEmail($email)
{
    $connection = getConnection();
    //$sqlQuery = "SELECT COUNT(*) as Count FROM user";
    $sqlQuery = "SELECT * FROM user";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
