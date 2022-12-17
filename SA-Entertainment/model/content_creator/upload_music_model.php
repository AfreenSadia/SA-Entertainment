<?php
require_once(__DIR__ . '/../db_conn.php');

function insertMusic($music)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO music(Title, Artist, Genre, UploadedBy, UploadedAt, File, IsOpenForGenSub, IsActive) VALUES
                ('{$music['title']}','{$music['artist']}','{$music['genre']}','{$music['uploadedBy']}','{$music['uploadedAt']}','{$music['file']}','{$music['isOpenForGenSub']}', 'p')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
