<?php
$conn = mysqli_connect("localhost", "root", "", "organic_mart");

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}
?>
