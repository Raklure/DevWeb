<?php

require_once 'Employee.php';

$employees = array();
$employees[] = new Employee(1, "superman", 1.27, 2020-1932);
$employees[] = new Employee(2, "batman", 1.00, 2020-1939);
$employees[] = new Employee(3, "spiderman", 0.82, 2020-1962);

function my_sort(Employee $e1, Employee $e2) :int
{
	return $e1->getSalary() <=> $e2->getSalary();
}

echo "<br>Key-preserving salary-increasing sorting<br>";
uasort($employees, "my_sort");
echo "<pre>"; print_r($employees); echo "</pre>";

echo "<br>Non-key-preserving salary-increasing sorting<br>";
usort($employees, "my_sort");
echo "<pre>"; print_r($employees); echo "</pre>";