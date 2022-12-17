<?php
require_once(__DIR__ . '/../db_conn.php');

function insertGame($game)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO game(Title, Genre, UploadedBy, UploadedAt, File, IsOpenForGenSub, IsActive) VALUES
                ('{$game['title']}','{$game['genre']}','{$game['uploadedBy']}','{$game['uploadedAt']}','{$game['file']}','{$game['isOpenForGenSub']}', 'p')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
