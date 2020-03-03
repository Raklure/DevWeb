<?php

// ===== FONCTIONS SUR ARRAY =====
function fill() { return "Pomme"; }
function displayArray($array) { echo "<pre>"; print_r($array); echo "</pre>"; }
$keys = range(1, 10);
$produits = array_fill_keys($keys, 0);
$produits = array_map("fill", $produits);
displayArray($produits);

// ===== Objets / Réflexion / PHPUnit =====
// Interface :				IEmployee.php / IManager.php
// Classe :					Employee.php / Manager.php / Team.php
// Vérification objet :		employee_raise.php
// Sort :					employee_sort.php
// Tests :					ManagerTest.php [autoload.php] (phpunit / phpab)
// Infos / Reflexion :		employee_reflex1 et 2.php

// ===== Session / Fichiers / XML ======
// Session :		Tout (superficiel)
// CSV :			employee_form.php (form, lock, open, ...) employee_table.php (table)
// XML :			employees2xml.php (write) get_employee.php (read)

// ===== Bases de données =====
// SQL :			*.sql (création/insertion)
// PDO :			connexpdo.inc.php
// JS :				js.php
// SELECT + Table 	afficher-modeles.php
// INSERT + Form 	inserer-modele.php / inserer-cartegrise.php
// Select/Option 	select-proprietaire.php / select-voiture.php (LIKE SQL)
// SQL complexe		rechercher-proprietaires et vehicules.php
// fetchObject 		rechercher-vehicules-1.php
// prep query 		rechercher-proprietaires-1.php

// ===== MVC (Modèle Vue Contrôleur) ======
// Le Modèle - traite les données (modele.php)
//		Son rôle est d'aller récupérer les informations "brutes" dans la bdd, de les organiser et de les assembler
//		pour qu'elles puissent ensuite être traitées par le contrôleur. On y trouve donc entre autres les requêtes SQL.
// La Vue - affiche les informations (affichageAccueil.php)
//		Elle ne fait presque aucun calcul et se contente de récupérer des variables pour savoir ce qu'elle doit afficher.
//		On y trouve essentiellement du code HTML mais aussi quelques boucles et conditions PHP très simples, pour
//		afficher par exemple une liste de messages.
// Le Contrôleur - fait le lien entre les deux (index.php)
//		Cette partie gère la logique du code qui prend des décisions. C'est en quelque sorte l'intermédiaire entre le
//		Modèle et la Vue : le Contrôleur va demander au modèle les données, les analyser, prendre des décisions
//		et renvoyer le texte à afficher à la Vue. Le Contrôleur contient exclusivement du PHP. C'est notamment lui qui
//		détermine si le visiteur a le droit de voir la page ou non (gestion des droits d'accès).

?>