<?php

// Check if any of the required inputs are empty
function emptyInput($email, $password)
{

    if (empty($email) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

// Validate email
function invalidEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

// Validate password using regular expression
function invalidPassword($password)
{
    if (!filter_var($password, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/")))) {
        return true;
    } else {
        return false;
    }
}
