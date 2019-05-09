<?php
	require_once 'annexes/connexpdo.inc.php';
	require_once 'annexes/js.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Insérer BDD</title>
		<meta charset="utf-8">
	</head>

	<body>
		<?php

			try
			{
				$bdd = connexpdo('airline');
			}
			catch (PDOException $e)
			{
				displayException($e);
			}

			$airline = file('annexes/airline.txt');
			try {
				for($i = 1; $i < count($airline); ++$i)
				{
					$passager = explode(";", $airline[$i]);
					$bdd->exec('INSERT INTO PASSAGER VALUES (NULL, "'.$passager[0].'", "'.$passager[1].'", "'.$passager[2].'", "'.$passager[3].'", "'.$passager[4].'", "'.$passager[5].'", "'.$passager[6].'", "'.trim($passager[7]).'")');
				}
			}
			catch (Exception $e) {
				die('Erreur : ' . $e->getMessage());
			}

		?>
	</body>
</html>