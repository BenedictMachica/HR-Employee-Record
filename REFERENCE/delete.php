<?php include("db.php"); ?>

<?php
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM pokemon WHERE id=$id");

echo "Pokémon deleted!";
?>

<br><a href="index.php">⬅ Back</a>
