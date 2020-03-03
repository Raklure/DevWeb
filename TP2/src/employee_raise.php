<?php
require_once 'Employee.php';

$employees = array();
$employees[] = new Employee(1, "superman", 1.27, 2020-1932);
$employees[] = new Employee(2, "batman", 1.00, 2020-1939);
$employees[] = new Employee(3, "spiderman", 0.82, 2020-1962);

function employee_raise($e)
{
	if(is_object($e) && $e instanceof Employee) {
		$e->setSalary($e->getSalary() * 1.05);
	} else {
		throw new Exception("Le paramètre n'est pas une instance de Employee\n\n");
	}
}

echo "Avant augmentation :<br>";
foreach ($employees as $emp) echo $emp."<br>";
echo "<br>";
array_map("employee_raise", $employees);
echo "Après augmentation :<br>";
foreach ($employees as $emp) echo $emp."<br>";
echo "<br>";

try {
	employee_raise(array());
} catch(Exception $e) {
	echo $e->getMessage();
}

?>