<?php
// Création du tableau [..., "D" => ["Prix" => 22.71,"Taux" => 0.05], ...]
$articles = range("A", "K");
$taux = [
    0.05,
    0.10,
    0.20
];
// Ici le tableau a uniquement des valeurs à 0 avec des clés de A à K
$articles = array_fill_keys($articles, 0);
// print_r($articles);

// function creer_prix_articles(string $article) : array {
function creer_prix_articles($article)
{
	// On récupère la variable globale $taux
    global $taux;
    return array(
        "Prix" => ((float) rand(1, 10000) / 100),
        "Taux" => $taux[rand(0, 2)]
    );
}

// On applique la fonction "creer_prix_articles" à chaque élément de $articles
$prix_taux = array_map("creer_prix_articles", $articles);

/*
echo "<pre>";
print_r($prix_taux);
echo "</pre>";
//*/
?>