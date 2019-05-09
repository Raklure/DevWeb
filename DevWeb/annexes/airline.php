<?php
	require_once 'connexpdo.inc.php';
	require_once 'js.php';
	require 'afficher-tableau.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Résultats du sondage</title>
		<style>
		table {
		  border-collapse: collapse;
		}

		table, th, tr, td {
		  border: 1px solid black;
		  text-align: center;
		}
		</style>
	</head>
	<body>
		<!--
		<form method="post" action="airline.php">
			<fieldset>
				<legend>Classe</legend>
				Economique <input type="radio" name="classe" value="économique" checked="checked" />
				Affaires <input type="radio" name="classe" value="affaires" />
				Première <input type="radio" name="classe" value="première" />
			</fieldset>
			<fieldset>
				<legend>Options</legend>
				Bagages en soute <input type="checkbox" name="bagages" value="oui" />
				File prioritaire <input type="checkbox" name="priorite" value="oui" />
				Voiture de location <input type="checkbox" name="voiture" value="oui" />
			</fieldset>
			<input type="submit" name="stats" value="statistiques" />
		</form>
		<p>Qualité de la nourriture :</p>
		-->
		<!--
		<?php
			if( isset($_POST['passager']['classe']) )
			{
				$passager = $_POST['passager']['classe'];
				if( isset($_POST['passager']['bagages']) )
					$passager = $passager.";1";
				else
					$passager = $passager.";0";
				if( isset($_POST['passager']['priorite']) )
					$passager = $passager.";1";
				else
					$passager = $passager.";0";
				if( isset($_POST['passager']['voiture']) )
					$passager = $passager.";1";
				else
					$passager = $passager.";0";
				$passager = $passager.";".$_POST['passager']['nourriture'];
				$passager = $passager.";".$_POST['passager']['confort'];
				$passager = $passager.";".$_POST['passager']['politesse'];
				$passager = $passager.";".$_POST['passager']['attente'];
				$champs = explode(";", $passager);

				try
				{
					$bdd = connexpdo('airline');
				}
				catch (PDOException $e)
				{
					displayException($e);
				}
				try {
					$bdd->exec('INSERT INTO PASSAGER VALUES (NULL, "'.$champs[0].'", "'.$champs[1].'", "'.$champs[2].'", "'.$champs[3].'", "'.$champs[4].'", "'.$champs[5].'", "'.$champs[6].'", "'.trim($champs[7]).'")');
				}
				catch (Exception $e) {
					die('Erreur : ' . $e->getMessage());
				}
			}
		?>
	-->
		<?php
			$pass = array();
			$table = $bdd->query('SELECT * FROM PASSAGER ORDER BY BAGAGES ASC LIMIT 200');

			$pass = $table->fetchAll(\PDO::FETCH_ASSOC);
			affiche_tableau($pass);
		?>
		<script src="stats.js">
			
		</script>
	</body>
</html>