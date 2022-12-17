<?php
require_once(__DIR__ . '/../db_conn.php');

function getTotalContentCreatorByUserEmail($email)
{
    $connection = getConnection();
    /*$sqlQuery = "SELECT COUNT(*) as Count FROM user";*/
    $sqlQuery = "SELECT * FROM user Where Type = 'content_creator'";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
