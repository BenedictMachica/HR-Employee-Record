<?php include("db.php"); ?>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM pokemon WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<h2>✏ Edit Pokémon</h2>

<form method="post">
    Name:<br>
    <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>

    Type:<br>
    <input type="text" name="type" value="<?php echo $row['type']; ?>"><br><br>

    Image:<br>
    <input type="text" name="image" value="<?php echo $row['image']; ?>"><br><br>

    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $type = $_POST['type'];
    $image = $_POST['image'];

    mysqli_query($conn, "UPDATE pokemon 
                         SET name='$name', type='$type', image='$image'
                         WHERE id=$id");

    echo "<p>Updated!</p>";
}
?>

<br>.php">⬅ Back</a>
