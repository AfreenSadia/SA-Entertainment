<?php
require_once(__DIR__ . '../../db_conn.php');

function readUser($email)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM user WHERE Email = '{$email}';";

    $result = mysqli_query($connection, $sqlQuery);
    $data = mysqli_fetch_assoc($result);
    mysqli_close($connection);

    return $data;
}

function updateUser($email, $name, $biography, $picture)
{
    $connection = getConnection();
    if ($picture != "") {
        $sqlQuery = "UPDATE user SET Name = '" . $name . "', Biography = '" . $biography . "', Picture = '" . $picture . "' WHERE Email = '" . $email . "'";
    } else {
        $sqlQuery = "UPDATE user SET Name = '" . $name . "', Biography = '" . $biography . "' WHERE Email = '" . $email . "'";
    }

    $result = mysqli_query($connection, $sqlQuery);
    mysqli_close($connection);
    return $result;
}

