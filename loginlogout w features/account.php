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
    <h2>Welcome!</h2>

<table>
    <tr>
        <td>First Name:</td>
        <td><?php echo $_SESSION["fname"]; ?></td>
    </tr>
    <tr>
        <td>Middle Name:</td>
        <td><?php echo $_SESSION["mname"]; ?></td>
    </tr>
    <tr>
        <td>Last Name:</td>
        <td><?php echo $_SESSION["lname"]; ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><?php echo $_SESSION["address"]; ?></td>
    </tr>
    <tr>
        <td>Phone Number:</td>
        <td><?php echo $_SESSION["phonenum"]; ?></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><?php echo $_SESSION["email"]; ?></td>
    </tr>
    <tr>
        <td>Username:</td>
        <td><?php echo $_SESSION["username"]; ?></td>
    </tr>
    <tr>
        <td>Password:</td>
        <td><?php echo $_SESSION["password"]; ?></td>
    </tr>
</table>

<br><br>
<a href="logout.php">Logout</a>

    </body>
</html>