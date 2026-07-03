<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "database.php";

$id = $_GET['id'];

$sql = "SELECT * FROM employees WHERE employee_id='$id'";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);

?> 

<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>

<h2>Edit Employee</h2>

<form action="updateEmployee.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $row['employee_id']; ?>">

    First Name:<br>
    <input type="text" name="firstname" value="<?php echo $row['first_name']; ?>"><br><br>

    Last Name:<br>
    <input type="text" name="lastname" value="<?php echo $row['last_name']; ?>"><br><br>

    Gender:<br>
    <input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br><br>

    Department:<br>
    <input type="text" name="department" value="<?php echo $row['department']; ?>"><br><br>

    Position:<br>
    <input type="text" name="position" value="<?php echo $row['POSITION']; ?>"><br><br>

    Salary:<br>
    <input type="number" step="0.01" name="salary" value="<?php echo $row['salary']; ?>"><br><br>

    Email:<br>
    <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

    Contact Number:<br>
    <input type="text" name="contact" value="<?php echo $row['contact_number']; ?>"><br><br>

    Date Hired:<br>
    <input type="date" name="date" value="<?php echo $row['date_hired']; ?>"><br><br>

    <input type="submit" value="Update Employee">

</form>

</body>
</html>