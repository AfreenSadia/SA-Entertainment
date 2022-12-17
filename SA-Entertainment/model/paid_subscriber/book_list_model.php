<?php
require_once(__DIR__ . '/../db_conn.php');

function getBookListByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM book WHERE IsOpenForGenSub = 'y';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
