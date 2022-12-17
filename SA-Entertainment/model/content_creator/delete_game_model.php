<?php
require_once(__DIR__ . '/../db_conn.php');

function deleteGame($title, $uploadedBy)
{
    $connection = getConnection();
    $sqlQuery = "DELETE FROM game WHERE Title = '{$title}' AND UploadedBy = '{$uploadedBy}'";
    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
?>
<!-- . -->