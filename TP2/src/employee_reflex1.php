<?php
require_once 'Manager.php';

$e = new Manager(0, "euler", 2.718, 2020-1707);

echo "**Classe :<br>";
echo get_class($e)."<br>";
echo "**Classe parente :<br>";
if(get_parent_class($e) == false)
	echo "Pas de classe parente<br>";
else
	echo get_parent_class($e)."<br>";

echo "**Propriétés visibles ayant une valeur par défaut :<br>";
echo "<pre>"; print_r(get_class_vars("Employee")); echo "</pre><br>";

echo "**Propriétés publiques :<br>";
echo "<pre>"; print_r(get_object_vars($e)); echo "</pre><br>";

echo "**Toutes les propriétés :<br>";
$e->introspection();