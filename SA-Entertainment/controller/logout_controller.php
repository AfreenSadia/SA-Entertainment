<?php

session_start();
session_destroy();
setcookie('isUserActive', 0, time() - 3600, '/');
header('location: ../index.php');
?>
<!-- . -->