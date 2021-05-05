<?php
    include_once "source/Employee.php";
    include_once "source/EmployeeManager.php";
    $employeeManager = new EmployeeManager("Json-Data/data.json");
    $employees = $employeeManager->getAll();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Manager</title>
</head>
<style>
    table{
        border: 1px chartreuse;
        background-color: darkgray;
    }
</style>
<body>
<div class="container">
    <table border="1px">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Age</th>
            <th>Dob</th>
        </tr>
        <?php foreach ($employees as $key => $employee){?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $employee->getName();?></td>
            <td><?php echo $employee->getAge();?></td>
            <td><?php echo $employee->getDob();?></td>
            <td><a href="edit/delete.php?id=<?php echo $key ?>">Delete</a></td>
            <td><a href="edit/edit.php?id=<?php echo $employee->getId(); ?>">Edit</a></td>
        </tr>
        <?php } ?>
        <a href="edit/add.php">Add</a>
    </table>
</div>
</body>
</html>
