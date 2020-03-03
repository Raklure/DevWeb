<?php
require_once 'Manager.php';

$e = new Manager(0, "euler", 2.718, 2020-1707);
$reflector = new ReflectionClass("Manager");

echo $reflector->getName()."<br>";
echo "<pre>"; echo $reflector->getParentClass()."</pre><br>";
echo "<pre>"; print_r($reflector->getProperties()); echo "</pre>";
echo "<pre>"; print_r($reflector->getMethods()); echo "</pre>";
echo "<br>";