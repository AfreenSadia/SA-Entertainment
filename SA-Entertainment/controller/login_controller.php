<?php
require_once(__DIR__ . '/../model/login_model.php');

$email = $_POST['email'];
$password = $_POST['password'];

if ($email == null || $email == "") {
    echo "Email is required";
} else if ($password == null || $password == "") {
    echo "Password is required";
} else {
    $user = ['email' => $email, 'password' => $password];
    $userData = authenticateUser($user);

    if ($userData != null) {
        session_start();
        $_SESSION['userEmail'] = $userData['Email'];
        $_SESSION['userType'] = $userData['Type'];
        setcookie('isUserActive', 1, time() + 3600, '/');

        if ($userData['Type'] == 'general_subscriber') {
            header("Location: ../view/general_subscriber/home.php");
        } else if ($userData['Type'] == 'content_creator') {
            header("Location: ../view/content_creator/home.php");
        } else if ($userData['Type'] == 'paid_subscriber') {
            header("Location: ../view/paid_subscriber/home.php");
        } else if ($userData['Type'] == 'admin') {
            header("Location: ../view/admin/home.php");
        } else {
            header("Location: ../index.php");
        }
    } else {
        echo "User not found";
    }
}
