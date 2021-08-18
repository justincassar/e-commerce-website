<?php

// Start session
session_start();

$title = 'Login';
$currentPage = 'login';

include_once('layout/header.php');
?>

<section class="col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class="container">
        <div class="row">
            <div class="card shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fs-5">Log In</h5>

                    <?php

                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyinput") {
                            echo '<div class="alert alert-primary" role="alert">Please fill in all fields</div>';
                        }
                        if ($_GET["error"] == "invalidemail") {
                            echo '<div class="alert alert-danger" role="alert">E-mail is incorrect</div>';
                        }
                        if ($_GET["error"] == "invalidpassword") {
                            echo '<div class="alert alert-danger" role="alert">Password is incorrect</div>';
                        }
                        if ($_GET["error"] == "success") {
                            echo '<div class="alert alert-success" role="alert">Details are all correct</div>';
                        }
                    }
                    ?>
                    
                    <form id="loginForm" action="/php/login.php" method="POST">
                        <div class="form-floating mb-3">
                            <input class="form-control" type="email" id="loginFormEmail" name="loginEmail" placeholder="name@example.com" required>
                            <label for="loginFormEmail">Email address</label>
                            <small id="emailHelp" class="form-text text-muted">Your email will not be shared with anyone else.</small>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="password" id="loginFormPassword" name="loginPassword" placeholder="Password" required>
                            <label for="loginFormPassword">Password</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>
                        <button class="btn btn-lg btn-danger" type="submit" name="login-submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('layout/footer.php');
?>