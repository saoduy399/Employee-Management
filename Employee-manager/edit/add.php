<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Age:</td>
                <td><input type="number" name="age"></td>
            </tr>
            <tr>
                <td>DOB</td>
                <td><input type="date" name="dob"></td>
            </tr>
            <tr>
                <td><input type="submit" value="SAVE" herf="Json-Data/data.json"></td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    include_once "../source/EmployeeManager.php";
    include_once "../source/Employee.php";

    $name=$_REQUEST["name"];
    $age=$_REQUEST["age"];
    $dob=$_REQUEST["dob"];

    $data = [
        "name"=>$name,
        "age"=>$age,
        "dob"=>$dob,
    ];

    $employeeManager = new EmployeeManager("../Json-Data/data.json");
    $employeeManager->add($data);

    header("location:../index.php");
}
