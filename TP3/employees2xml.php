<?php

require_once('Employee.php');
require_once('Manager.php');

ini_set("display_errors","On");
error_reporting(E_ALL);

$file = dirname(__FILE__) . "/employees.csv";
$employees = [];

if (!file_exists($file) || !$id_file=fopen($file, "r")) {
	exit;
} else {
	while ($tab = fgetcsv($id_file, 200, ";"))
	{
		$id = (int) $tab[0];
		$nom = $tab[1];
		$salaire = (float) $tab[2];
		$age = (int) $tab[3];
		$e = new Employee($id, $nom, $salaire, $age);
		$employees[] = $e;
	}
	fclose($id_file);
}

$file = fopen("employees.xml", "w");
if ($file===false) die("Could not open xml file for writing.");

fwrite($file, "<?xml version='1.0' encoding='UTF-8'?>\n");
fwrite($file, "<!DOCTYPE employees SYSTEM 'employees.dtd'>\n");

fwrite($file, "<employees>\n");
foreach($employees as $employee) {
	if (get_class($employee) == "Employee") {
		fwrite($file, "\t<employee>\n");
		toXML($employee);
		fwrite($file, "\t</employee>\n");
	} else if (get_class($employee)=="Manager") {
		fwrite($file, "\t<Manager>\n");
		toXML($employee);
		fwrite($file, "\t<subordinates>\n");
		foreach($employee->getArrEmployeesId() as $id)
			fwrite($file, "\t\t<refId>$id</refId>\n");
		fwrite($file, "\t</subordinates>\n");
		fwrite($file, "\t</Manager>\n");
	}
}
fwrite($file, "</employees>\n");

function toXML($employee) {
	global $file;
	fwrite($file, "\t\t<id>".$employee->getId()."</id>\n");
	fwrite($file, "\t\t<name>".$employee->getName()."</name>\n");
	fwrite($file, "\t\t<salary>".$employee->getSalary()."</salary>\n");
	fwrite($file, "\t\t<age>".$employee->getAge()."</age>\n");
}

?>