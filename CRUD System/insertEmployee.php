<?php

include "database.php";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$department=$_POST['department'];
$position=$_POST['position'];
$salary=$_POST['salary'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$date=$_POST['date'];

$sql="INSERT INTO employees
(first_name,last_name,gender,department,position,salary,email,contact_number,date_hired)

VALUES

('$firstname','$lastname','$gender','$department','$position','$salary','$email','$contact','$date')";

mysqli_query($conn,$sql);

header("Location:index.php");

?>