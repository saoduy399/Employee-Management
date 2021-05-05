<?php

include_once "../source/Employee.php";
include_once "../source/EmployeeManager.php";

$employeeManager = new EmployeeManager("../Json-Data/data.json");
$employees = $employeeManager->loadDataFile();

array_splice($employees,$_REQUEST["id"],1);

$employeeManager->saveDataFile($employees);

header("location:../index.php");
