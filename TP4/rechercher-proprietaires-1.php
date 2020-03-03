<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Recherche des propriétaires d'un modèle</title>
</head>
<body>

	<form action="<?php echo $_SERVER['PHP_SELF'];?>" name="form1" method="post" enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend><b>Choisir le modèle</b></legend>
			<table>
				<tr>
					<td>Marque et Modèle</td>
					<td><input type="text" name="modele" maxlength=" "/></td>
				</tr>
				<tr>
					<td><input type="submit" name="Chercher"/></td>
				</tr>
			</table>
		</fieldset>
	</form>

	<?php
		if (isset($_POST['Chercher']) && isset($_POST['modele']))
		{
			include_once 'connexpdo.inc.php';
			$db = connexpdo("voitures");
			$modele = $_POST['modele'];
			$preparedQuery = $db->prepare("SELECT proprietaire.nom, proprietaire.prenom FROM voiture, modele, proprietaire, cartegrise WHERE modele=:modele AND voiture.id_modele=modele.id_modele AND cartegrise.immat=voiture.immat AND proprietaire.id_pers=cartegrise.id_pers");
			$preparedQuery->bindParam(':modele', $modele, PDO::PARAM_STR);
			$preparedQuery->execute();
			$preparedQuery->bindColumn('nom', $nom);
			$preparedQuery->bindColumn('prenom', $prenom);
			echo "<table border=\"1\">";
			while ($preparedQuery->fetch(PDO::FETCH_BOUND)) {
				echo "<tr><td>$nom</td><td>$prenom</td></tr>";
			}
			echo "</table>";
		} else {
			echo "<h3>Formulaire à compléter !</h3>";
		}

	?>

</body>
</html>