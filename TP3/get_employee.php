<?php

require_once 'Manager.php';

error_reporting(E_ALL);
ini_set("display_errors", 1);

function createEmployee(SimpleXMLElement $element) :Employee
{
	$id = (int) $element->id;
	$name = (string) $element->name;
	$salary = (float) $element->salary;
	$age = (int) $element->age;
	return new Employee($id, $name, $salary, $age);
}

$filename = "employees.xml";
$xml = simplexml_load_file($filename);
$employee = null;

/* Approche 1 : force brute SimpleXML
foreach ($xml->employee as $employeeElement) {
	if (((int) $employeeElement->id) == (int) ($_GET['id'])) {
		$employee = createEmployee($employeeElement);
		break;
	}
}
//*/

//* Approche 2 : XPath
$qry = "//employee[id={$_GET["id"]}]";
//*/

//* 2.1 : XPath + SimpleXML
$elts = $xml->xpath($qry);
$employee = createEmployee($elts[0]);
//*/

/* 2.2 XPath + DOMDocument
$doc = new DOMDocument();
$doc->load($filename);
$xpath = new DOMXPath($doc)
$elts = $xpath->query($qry);
$elt = $elts->item(0);
$id = (int) $elt->getElementByTagName("id")->item(0)->textContent;
$name = (string) $elt->getElementByTagName("name")->item(0)->textContent;
$salary = (float) $elt->getElementByTagName("salary")->item(0)->textContent;
$age = (int) $elt->getElementByTagName("age")->item(0)->textContent;
$employee = new Employee($id, $name, $salary, $age);
//*/

echo $employee;

?>