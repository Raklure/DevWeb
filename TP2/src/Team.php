<?php
declare(strict_types=1);
require_once 'Employee.php';
require_once 'Manager.php';

class Team
{
	protected $arrEmployees;

	public function __construct()
	{
		$this->arrEmployees = array();
	}
	public function add(Employee $e)
	{
		$this->arrEmployees[] = $e;
	}

	public function __toString() :string
	{
		$arr=array();
		foreach($this->arrEmployees as $emp) {
			if (get_class($emp) == "Employee") {
				$arr[] = $emp->__toString();
			} else {
				$s = $emp->__toString() . "<br>subordinates=[";
				foreach ($emp->getArrEmployeesId() as $id) {
					$s .= $this->arrEmployees[$id]->getName()." ";
				}
				$s .= "]<br>";
				$arr[] = $s;
			}
		}
		return implode("<br>", $arr);
	}
}

$team = new Team();
$e1 = new Employee(1, "superman", 1.27, 2020-1932);
$e2 = new Employee(2, "batman", 1.00, 2020-1939);
$e3 = new Employee(3, "spiderman", 0.82, 2020-1962);
$team->add($e1);
$team->add($e2);
$team->add($e3);

$m = new Manager(4, "wonder woman", 3.14, 2020-1941);
$m->add(0);
$m->add(1);
$m->add(2);
$team->add($m);

echo $team;

?>