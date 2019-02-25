<?php
	if(!empty($_POST['fond']))
		setcookie('couleurFond', $_POST['fond'], time() + 20);
	if(!empty($_POST['texte']))
		setcookie('couleurTexte', $_POST['texte'], time() + 20);

?>

<!-- 
	Pour la session on fait session_start(); au début, puis on stocke les infos dans 
	$_SESSION['nomVar'];
-->

<html>

	<head>
		
		<meta charset="ut-8" />
		<title>TP Session & Cookie</title>
			<?php if(!empty($_POST['fond'])) { ?>
					<style type="text/css">
						body {
							background-color: <?php echo $_POST['fond'] ?>
						}
					</style>
			<?php }
				  else { ?>
					  <style type="text/css">
						body {
							background-color: <?php echo $_COOKIE['couleurFond'] ?>
						}
					  </style>
			<?php } ?>
			
			<?php if(!empty($_POST['texte'])) { ?>
					<style type="text/css">
						form {
							color: <?php echo $_POST['texte'] ?>
						}
					</style>
			<?php }
				  else { ?>
					  <style type="text/css">
						form {
							color: <?php echo $_COOKIE['couleurTexte'] ?>
						}
					  </style>
			<?php } ?>
		</style>
	</head>

	<body>
		<div class="form">
			<form method="post">
				<fieldset>
					<legend>Choisissez vos couleurs (mot clé ou code)</legend>
					
					Couleur de fond : 
						<input type="text" name="fond"/>
						
					<br/><br/>
					
					Couleur de texte : 
						<input type="text" name="texte"/>
						
					<br/><br/>
					
					<input type="submit" value="Soumettre" />
					
				</fieldset>
			</form>
		</div>
	</body>

</html>
