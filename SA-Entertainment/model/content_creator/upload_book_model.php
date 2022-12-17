<?php
require_once(__DIR__ . '/../db_conn.php');

function insertBook($book)
{
    $connection = getConnection();
    $sqlQuery = "INSERT INTO book(Title, Author, Genre, UploadedBy, UploadedAt, File, IsOpenForGenSub, IsActive) VALUES
                ('{$book['title']}','{$book['author']}','{$book['genre']}','{$book['uploadedBy']}','{$book['uploadedAt']}','{$book['file']}','{$book['isOpenForGenSub']}', 'p')";

    $status = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $status;
}
?>
<!-- . -->