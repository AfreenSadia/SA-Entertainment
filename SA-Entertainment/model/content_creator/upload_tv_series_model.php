<?php
require_once(__DIR__ . '/../db_conn.php');

function insertSeries($series)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO series(Title, Genre, UploadedBy, UploadedAt, File, IsOpenForGenSub, IsActive) VALUES
                ('{$series['title']}','{$series['genre']}','{$series['uploadedBy']}','{$series['uploadedAt']}','{$series['file']}','{$series['isOpenForGenSub']}', 'p')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
