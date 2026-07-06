<?php include("db.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pokédex Collection</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color:#f4f4f4;
            margin:0;
            padding:20px;
            text-align:center;
        }

        h1{
            background:#e53935;
            color:white;
            padding:15px;
            border-radius:10px;
        }

        .container{
            display:flex;
            flex-wrap:wrap;
            justify-content:center;
            gap:20px;
            margin-top:20px;
        }

        .card{
            width:220px;
            background:white;
            border-radius:15px;
            box-shadow:0px 4px 10px rgba(0,0,0,0.2);
            padding:15px;
        }

        .card img{
            width:150px;
            height:150px;
            object-fit:contain;
        }

        .pokemon-id{
            color:gray;
            font-size:14px;
        }

        .pokemon-name{
            font-size:22px;
            font-weight:bold;
            margin-top:10px;
        }

        .pokemon-type{
            color:#666;
            margin-top:5px;
        }

        .btn{
            display:inline-block;
            margin-top:20px;
            padding:10px 15px;
            background:#2196F3;
            color:white;
            text-decoration:none;
            border-radius:5px;
        }

        .btn:hover{
            background:#1976D2;
        }
    </style>
</head>

<body>

<h1>📖 Pokédex Collection</h1>

<?php

$result = mysqli_query($conn,"SELECT * FROM pokemon ORDER BY id ASC");

if(mysqli_num_rows($result) > 0)
{
    echo "<div class='container'>";

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<div class='card'>";

        if(!empty($row['image']))
        {
            echo "<img src='images/".$row['image']."' alt='".$row['name']."'>";
        }
        else
        {
            echo "<img src='https://via.placeholder.com/150?text=No+Image'>";
        }

        echo "<div class='pokemon-id'>#".$row['id']."</div>";
        echo "<div class='pokemon-name'>".$row['name']."</div>";
        echo "<div class='pokemon-type'>Type: ".$row['type']."</div>";

        echo "</div>";
    }

    echo "</div>";
}
else
{
    echo "<h3>No Pokémon found in the Pokédex.</h3>";
}
?>

<br>
<a href="index.php" class="btn">⬅ Back to Home</a>

</body>
</html>