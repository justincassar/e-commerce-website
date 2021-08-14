<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Food delivery service website">
    <meta name="author" content="Justin Cassar">
    <title> <?php echo ($title) ?> - GiveMeGrub - Food ordering service</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Custom CSS stylesheet -->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand fw-bolder" href="#!">GiveMeGrub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <?php

                    // Check if user is logged
                    if (!isset($_SESSION['username'])) {

                        $urls = array(
                            'Home' => '/',
                            'Login' => '/login.php'
                        );
                    } else {

                        $urls = array(
                            'Home' => '/',
                            'Logout' => '/logout.php'
                        );
                    }

                    // NOTE: Variable $currentPage is stored on root PHP file
                    foreach ($urls as $name => $url) {
                        echo '<li class="' . (($currentPage === $name) ? 'active' : '') .
                            'nav-item"><a class="nav-link" href="' . $url . '">' . $name . '</a></li>';
                    }
                    ?>

                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>