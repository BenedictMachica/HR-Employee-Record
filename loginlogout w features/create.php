<?php
include("session.php");

if(isset($_POST["create"]))
{
    $_SESSION["fname"] = $_POST["fname"];
    $_SESSION["lname"] = $_POST["lname"];
    $_SESSION["gender"] = $_POST["gender"];
    $_SESSION["dob"] = $_POST["dob"];
    $_SESSION["department"] = $_POST["department"];
    $_SESSION["phonenum"] = $_POST["phonenum"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["address"] = $_POST["address"];
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <body>
    <h2>Create Account</h2>

<form method="post">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender"></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="text" name="dob"></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td><input type="text" name="department"></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" name="phonenum"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="address" name="address"></td>
            </tr>
            <tr>
                <td>Create Username:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Create Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="create" value="Create Account"></td>
            </tr>
        </table>
    </form>

    </body>
</html>
