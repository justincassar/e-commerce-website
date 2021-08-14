<?php

// Start session
session_start();

$title = 'Home';
$currentPage = 'index';

include_once('layout/header.php');
?>

<header class="bg-danger py-5">
    <div class="container px-4 px-lg-5 my-2">
        <div class="text-center text-white">
            <h1 class="display-3 fw-bolder text-white">Feeling hungry?</h1>
            <p class="lead fw-normal text-white mb-0">We got food at your location</p>
        </div>
    </div>
</header>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        </div>
    </div>
</section>

<?php
include_once('layout/footer.php');
?>