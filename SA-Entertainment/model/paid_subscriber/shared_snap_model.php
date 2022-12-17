<?php
require_once(__DIR__ . '/../db_conn.php');

function getSnapByUserEmail($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM share_snap WHERE UploadedBy = '{$email}';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
