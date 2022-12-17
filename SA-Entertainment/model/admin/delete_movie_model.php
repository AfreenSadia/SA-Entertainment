<?php
require_once(__DIR__ . '/../db_conn.php');

function deleteMovie($title, $uploadedBy)
{
    $connection = getConnection();
    $sqlQuery = "DELETE FROM movie WHERE Title = '{$title}' AND UploadedBy = '{$uploadedBy}'";
    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
?>
<!-- . -->