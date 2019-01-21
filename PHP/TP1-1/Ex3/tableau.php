<html lang="fr">
	
	<head>
		<link rel="stylesheet" type="text/css" href="tableau.css"/>
	</head>

	<body>
		
		<table border="collapse" style="border-collapse:collapse">
			
			<th class="bleu">==
				<?php
					$l1 = array(TRUE,FALSE,1,0,-1,"1","0","-1",NULL,[],"");
					for ($i = 0; $i < count($l1); $i++){
							echo "<td class='bleu'>".$l1[$i]."</td>";
					}
				?>
			</th>
			<?php
				for ($i = 0; $i < count($l1); $i++){
					echo "<tr><td class='bleu'>".$l1[$i]."</td>";
					for ($j = 0; $j < count($l1); $j++){
							echo "<td>";
							echo $l1[$i] == $l1[$j];
							echo "</td>";
					}
					echo "</tr>";
				}
			?>
			
		</table>
		
	</body>



</html>
