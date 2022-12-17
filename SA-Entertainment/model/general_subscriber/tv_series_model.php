<?php
require_once(__DIR__ . '/../db_conn.php');

function getGenSubTvSeries()
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM series WHERE IsOpenForGenSub = 'y' AND IsActive = 'y';";

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);

    return $result;
}
