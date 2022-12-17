<?php
require_once(__DIR__ . '/../db_conn.php');

function updateMovie($title, $uploadedBy)
{
    $connection = getConnection();
    $sqlQuery = "UPDATE movie SET IsActive = 'y' WHERE Title = '{$title}' AND UploadedBy = '{$uploadedBy}'";
    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
?>
<!-- . -->
