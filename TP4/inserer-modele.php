<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Saisissez les caractéristiques du modèle</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"
		enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend>
				<b>Modèle de voiture</b>
			</legend>
			<table>
				<tr>
					<td>Code :</td>
					<td><input type="text" name="id_modele" size="40" maxlength="30"/></td>
				</tr>
				<tr>
					<td>Nom du modèle :</td>
					<td><input type="text" name="modele" size="40" maxlength="30"/></td>
				</tr>
				<tr>
					<td>Carburant : <select name="carburant">
							<option value="essence">Essence</option>
							<option value="diesel">Diesel</option>
							<option value="gpl">G.P.L.</option>
							<option value="électrique">Electrique</option>
					</select></td>
				</tr>
				<tr>
					<td><input type="reset" value=" Effacer "></td>
					<td><input type="submit" value=" Envoyer "></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<?php
	
	include ('connexpdo.inc.php');
	$db = connexpdo("voitures");
	if(!empty($_POST['id_modele']) && !empty($_POST['modele']) && !empty($_POST['carburant']))
	{
		try
		{
			$id_modele = $db->quote($_POST['id_modele']);
			$modele = $db->quote($_POST['modele']);
			$carburant = $db->quote($_POST['carburant']);
			$query = "INSERT INTO modele VALUES ($id_modele, $modele, $carburant)";
			$result = $db->exec($query);
			if ($result != 1) {
				alert("Erreur: \"$db->errorCode()\"");
			} else {
				alert("Modèle bien enregristré !");
			}
		}
		catch (PDOException $e)
		{
			displayException($e);
			exit;
		}
	}

	?>
</body>
</html>