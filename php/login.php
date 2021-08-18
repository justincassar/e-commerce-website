<?php

if (isset($_POST["login-submit"])) {

    $email = $_POST["loginEmail"];
    $password = $_POST["loginPassword"];

    require_once 'dbconfig.php';
    require_once 'functions.php';

    if (emptyInput($email, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    } 
    if (invalidEmail($email) !== false) {
        header("location: ../login.php?error=invalidemail");
        exit();
    } 
    if (invalidPassword($password) !== false) {
        header("location: ../login.php?error=invalidpassword");
        exit();
    }
    else {
        header("location: ../login.php?error=success");
        exit();
    }

} else {

    // Redirection for when this file is accessed directly
    header("location: ../login.php");
    exit();
}
