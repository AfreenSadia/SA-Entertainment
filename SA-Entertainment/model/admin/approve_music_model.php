<?php
require_once(__DIR__ . '/../db_conn.php');

function updateMusic($title, $uploadedBy)
{
    $connection = getConnection();
    $sqlQuery = "UPDATE music SET IsActive = 'y' WHERE Title = '{$title}' AND UploadedBy = '{$uploadedBy}'";
    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
?>
<!-- . -->
