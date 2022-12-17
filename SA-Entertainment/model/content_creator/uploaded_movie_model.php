<?php
require_once(__DIR__ . '/../db_conn.php');

function getMoviesByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM movie WHERE UploadedBy = '{$email}';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
