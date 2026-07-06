<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pokédex</title>
    <style>
        body { font-family: Arial; background:#f2f2f2; text-align:center; }
        h1 { background:red; color:white; padding:10px; }

        .container {
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
        }

        .card {
            background:white;
            width:200px;
            margin:15px;
            padding:10px;
            border-radius:15px;
            box-shadow:0 4px 8px rgba(0,0,0,0.2);
        }

        .card img {
            width:150px;
            height:150px;
        }

        .name { font-weight:bold; font-size:18px; }
        .type { color:gray; margin-bottom:10px; }

        .btn {
            padding:5px 10px;
            text-decoration:none;
            color:white;
            border-radius:5px;
        }

        .edit { background:blue; }
        .delete { background:red; }
        .add { background:green; }
    </style>
</head>

<body>

<h1>📘 Pokédex</h1>

<a href="create.php" class="btn add">➕ Add Pokémon</a>
<a href="view.php" class="btn" style="background:blue;">
    📖 View Pokédex
</a>
<div class="container">

<?php
$result = mysqli_query($conn, "SELECT * FROM pokemon");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='card'>";
    // Image
    if (!empty($row['image'])) {
        echo "<img src='images/" . $row['image'] . "'><br>";
    } else {
        echo "<p>No Image</p>";
    }

    // Name
    echo "<div class='name'>" . $row['name'] . "</div>";

    // Type
    echo "<div class='type'>Type: " . $row['type'] . "</div>";

    // Buttons
    echo "<a href='update.php?id=" . $row['id'] . "' class='btn edit'>✏ Edit</a> ";

    echo "<a href='delete.php?id=" . $row['id'] . "' class='btn delete' onclick=\"return confirm('Delete this Pokémon?')\">❌ Delete</a>";

    echo "</div>";
}
?>
</div>

</body>
</html>