<?php

function emptyInput($email, $password)
{

    if (empty($email) || empty($password)) {
        $result = true;
    } else {
        $result = false;
    }
}
