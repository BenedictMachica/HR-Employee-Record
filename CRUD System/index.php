<?php
include "database.php";

$sql = "SELECT * FROM employees";
$result = mysqli_query($conn,$sql);
?>

<h2>HR Employee Record</h2>

<a href="createEmployee.php">Add Employee</a>

<table border="1">

<tr>

<th>ID</th>
<th>Name</th>
<th>Department</th>
<th>Position</th>
<th>Salary</th>
<th>Action</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['employee_id']; ?></td>

<td>
<?php
echo $row['first_name']." ".$row['last_name'];
?>
</td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['POSITION']; ?></td>

<td><?php echo $row['salary']; ?></td>

<td>

<a href="editEmployee.php?id=<?php echo $row['employee_id']; ?>">
Edit
</a>

|

<a href="deleteEmployee.php?id=<?php echo $row['employee_id']; ?>">
Delete
</a>

</td>

</tr>

<?php
}
?>

</table>