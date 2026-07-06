<?php
include("session.php");

if(!isset($_SESSION["login"]))
{
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <body>
    <h2>Welcome, <?php echo $_SESSION["fname"]; ?> ! </h2>

<br><br>
<a href="logout.php">Logout</a>

    </body>
</html>