<?php
require_once(__DIR__ . '/../db_conn.php');

function getBooksByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM book WHERE UploadedBy = '{$email}';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
