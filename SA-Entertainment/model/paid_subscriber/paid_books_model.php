<?php
require_once(__DIR__ . '/../db_conn.php');

function getPaidBookListByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM book WHERE IsOpenForGenSub = 'n';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
