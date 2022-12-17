<?php
require_once(__DIR__ . '/db_conn.php');

function authenticateUser($user)
{
    $connection = getConnection();
    $sqlQuery = "SELECT * FROM user WHERE Email = '{$user['email']}' AND Password = '{$user['password']}';";
    $result = mysqli_query($connection, $sqlQuery);
    $user = mysqli_fetch_assoc($result);
    mysqli_close($connection);
    return $user;
}
?>
<!-- . -->