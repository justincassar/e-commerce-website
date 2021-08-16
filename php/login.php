<?php

if (isset($_POST["login-submit"])) {

    $email = "root";
    $password = "qwe123";

    require_once 'dbconfig.php';
    require_once 'functions.php';

    if (emptyInput($email, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
    }

} else {

    // Redirection for when this file is accessed directly
    header("location: ../login.php");
}
