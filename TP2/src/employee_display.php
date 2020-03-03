<?php
declare(strict_types=1);
require_once 'Employee.php';

$employees = array();
$employees[] = new Employee(1, "superman", 1.27, 2020-1932);
$employees[] = new Employee(2, "batman", 1.00, 2020-1939);
$employees[] = new Employee(3, "spiderman", 0.82, 2020-1962);
echo "<pre>"; print_r($employees); echo "</pre>";
foreach ($employees as $emp) echo $emp."<br>";

?>