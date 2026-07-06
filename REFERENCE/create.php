<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Pokémon</title>

    <style>
        body{
            font-family:Arial, sans-serif;
            background:#f4f4f4;
            text-align:center;
            padding:20px;
        }

        form{
            background:white;
            width:350px;
            margin:auto;
            padding:20px;
            border-radius:10px;
            box-shadow:0 4px 8px rgba(0,0,0,.2);
        }

        input[type=text]{
            width:90%;
            padding:8px;
        }

        input[type=submit]{
            background:green;
            color:white;
            border:none;
            padding:10px 15px;
            border-radius:5px;
            cursor:pointer;
        }

        .btn-back{
            display:inline-block;
            margin-top:20px;
            padding:10px 15px;
            background:#2196F3;
            color:white;
            text-decoration:none;
            border-radius:5px;
        }

        .btn-back:hover{
            background:#1976D2;
        }
    </style>
</head>

<body>

<h2>➕ Add Pokémon</h2>

<form method="post">

    Name:<br>
    <input type="text" name="name" required><br><br>

    Type:<br>
    <input type="text" name="type" required><br><br>

    Image filename:<br>
    <input type="text" name="image"><br><br>

    <input type="submit" name="submit" value="Add Pokémon">

</form>

<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $type = $_POST['type'];
    $image = $_POST['image'];

    mysqli_query($conn,
        "INSERT INTO pokemon(name,type,image)
         VALUES('$name','$type','$image')"
    );

    echo "<p>Pokémon added successfully!</p>";
}
?>

<a href="index.php" class="btn-back">
    ⬅ Back to Home
</a>

</body>
</html>