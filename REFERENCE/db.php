<?php
$conn = mysqli_connect("localhost", "root", "", "pokedex");

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
?>
