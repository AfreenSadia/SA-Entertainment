<?php
require_once(__DIR__ . '/../db_conn.php');

function getSeriesByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM series WHERE UploadedBy = '{$email}';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
