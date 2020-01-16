<?php
$articles = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K"];
$tva = [0.05, 0.10, 0.20];

# On remplit prix_taux de valeurs aléatoires
function remplir()
{
	# pour utiliser le tableau $tva
	global $tva;
	# /100 pour avoir un float à partir de rand()
	return array("Prix"=> (float)rand(0,10000)/100, "Taux"=> $tva[rand(0,2)]);
}

# $articles devient un tableau remplit de 0 avec ses anciennes valeurs comme clés
$articles = array_fill_keys($articles, 0);

# on applique la fonction remplir sur $prix_taux avec $articles en paramètre
$prix_taux = array_map('remplir', $articles);

#Affichage
#echo "<pre>";
#print_r($prix_taux);
#echo "</pre>";
?>
