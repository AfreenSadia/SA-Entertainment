<?php
    require_once(__DIR__.'/../../model/paid_subscriber/registration_model.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    if($name == null || $name == "") {
        echo "Name is required";
    } else if($email == null || $email == "") {
        echo "Email is required";
    } else if($password == null || $password == "") {
        echo "Password is required";
    } else if($confirmPassword == null || $confirmPassword == "") {
        echo "Confirm Password is required";
    }  else if($password != $confirmPassword) {
        echo "Password and Confirm Password do not match";
    } else if($gender == null || $gender == "") {
        echo "Gender is required";
    } else if($dob == null || $dob == "") {
        echo "DOB is required";
    } else if(strlen($password) < 4){
        echo "Password must not be less than four (4) characters";
    } 
    else {
        $user = ['name'=>$name, 'email'=>$email, 'password'=>$password, 'confirmPassword'=>$confirmPassword, 'gender'=>$gender, 'dob'=>$dob];
        $status = insertUser($user);

        if($status)
        {
            echo $status;
            header("Location: ../../index.php");
        }
        else 
        {
             echo "Failed to save user in database";
        }
    }
?>