<?php

// Start session
session_start();

$title = 'Login';
$currentPage = 'login';

include_once('layout/header.php');
?>

<section class="col-md-5 mx-auto">
    <div class="">
        <form action="php/login.php" method="POST">
            <div class="form-floating">
                <label for="loginFormEmail">Email address</label>
                <input type="email" class="form-control" id="loginFormEmail" placeholder="name@example.com">
                <small id="emailHelp" class="form-text text-muted">Your email will not be shared with anyone else.</small>
            </div>
            <div class="form-floating">
                <label for="loginFormPassword">Password</label>
                <input type="password" class="form-control" id="loginFormPassword" placeholder="Password">
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-danger" type="submit">Sign in</button>
        </form>
    </div>
</section>

<?php
include_once('layout/footer.php');
?>