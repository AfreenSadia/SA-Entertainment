<?php
require_once(__DIR__ . '/../db_conn.php');

function getMusicsByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM music WHERE UploadedBy = '{$email}';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
