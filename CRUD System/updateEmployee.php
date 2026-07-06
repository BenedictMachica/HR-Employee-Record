<?php

include "database.php";

$id=$_POST['id'];

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$gender    = $_POST['gender'];
$dob       = $_POST['dob'];
$department= $_POST['department'];
$position  = $_POST['position'];
$salary    = $_POST['salary'];
$email     = $_POST['email'];
$contact   = $_POST['contact'];
$address   = $_POST['address'];
$date      = $_POST['date'];

$sql="UPDATE employees SET

first_name='$firstname',

last_name='$lastname',

gender='$gender',

department='$department',

POSITION='$position',

salary='$salary',

email='$email',

contact_number='$contact',

date_hired='$date'

WHERE employee_id='$id'";

mysqli_query($conn,$sql);

header("Location:index.php");

?>