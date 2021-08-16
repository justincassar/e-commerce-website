<?php

$dbServer = "localhost";
$dbUser = "root";
$dbPassw = "123456";
$dbName = "food_delivery";

// Connect to database
$conn = mysqli_connect($dbServer, $dbUser, $dbPassw, $dbName);

if (!$conn) {
  die('Could not connect to database:' . mysqli_connect_error());
}
