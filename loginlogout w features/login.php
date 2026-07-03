<?php
include("session.php");

if(isset($_POST["login"]))
{
    if($_POST["password"] == $_SESSION["password"])
    {
        $_SESSION["login"] = true;
        header("Location: account.php");
    }
    else
    {
        echo "Wrong Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login</h2>

<form method="post">

    Enter Your Username:<br>
    <input type="text" name="username" required><br><br>

    Enter Your Password:<br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>