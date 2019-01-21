<?php

$entete = "CORPS";
$methode = $_SERVER['REQUEST_METHOD'];
$exe = $_SERVER['PHP_SELF'];
$courant = $_SERVER['SCRIPT_FILENAME'];

echo "<h1><b>$entete</b></h1>";
echo "<b>Fichier ".__FILE__."</b>";
echo "<br/><br/>";
echo "Méthode HTTP utilisée : ".$methode;
echo "<br/><br/>";
echo "Chemin du fichier en cours d'exécution : ".$exe;
echo "<br/><br/>";
echo "Répertoire du fichier courant/inclus : ".__DIR__;

?>
