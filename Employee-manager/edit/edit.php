<?php

include_once "../source/Employee.php";
include_once "../source/EmployeeManager.php";

$employeeManager = new EmployeeManager("../Json-Data/data.json");
$employee = $employeeManager->getEmployeeById($_GET["id"]);


?>
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
    <div>
        <form method="post">
            <table>
                <h2>Edit Employee</h2>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value="<?php echo $employee->getName(); ?>"></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="number" name="age" value="<?php echo $employee->getAge(); ?>"></td>
                </tr>
                <tr>
                    <td>Dob</td>
                    <td><input type="date" name="dob" value="<?php echo $employee->getDob(); ?>"></td>
                </tr>
                <tr>
                    <td>
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </body>
    </html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $dob = $_REQUEST["dob"];

    $data = $employeeManager->loadDataFile();

    foreach ($data as $item) {
        if ($item->id == $_GET["id"]) {
            $item->name = $name;
            $item->age = $age;
            $item->dob = $dob;
        }
    }

    $employeeManager->saveDataFile($data);

    header("location:../index.php");
}

