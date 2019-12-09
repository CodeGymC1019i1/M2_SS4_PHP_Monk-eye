<?php
include "../class/Employees.php";
include "../class/EmployeeManager.php";

$search = $_GET['search'];
$listEmployee = new EmployeeManager("../data.json");
$employee = $listEmployee ->search($search);

