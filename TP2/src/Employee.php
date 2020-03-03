<?php
declare(strict_types=1);
require_once ("IEmployee.php");

class Employee implements IEmployee
{
	private $id;
	private $age;
	protected $salary;
	public $name = "anonymous";

	public function __construct(int $id, string $name, float $salary, int $age)
	{
		$this->id = $id;
		$this->name = $name;
		$this->salary = $salary;
		$this->age = $age;
	}

	public function getId() :int 		{ return $this->id; }
	public function getName() :string 	{ return $this->name; }
	public function getSalary() :float { return $this->salary; }
	public function getAge() :int 		{ return $this->age; }

	public function setid(int $id) 				{ $this->id = $id; }
	public function setName(string $name)		{ $this->name = $name; }
	public function setSalary(float $salary)	{ $this->salary = $salary; }
	public function setAge(int $age)			{ $this->age = $age; }

	public function __toString() :string
	{
		return "employee: id=$this->id name=$this->name salary=$this->salary age=$this->age\n";
	}

	function introspection()
	{
		$fields = get_object_vars($this);
		echo "<pre>"; print_r($fields); echo "</pre>";
	}
}
?>