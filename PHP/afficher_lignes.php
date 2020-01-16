<?php

require("creer_tableau.php");

function cmp($a, $b)
{
	if($a['Taux'] == $b['Taux'])
	{
		if ($a['Prix'] == $b['Prix']) { return 0; }
		return $a['Prix'] < $b['Prix']? 1:-1;
	}
	return $a['Taux'] > $b['Taux']? 1:-1;
}
if (isset($_GET['sortTVA']))
{
	usort($prix_taux, 'cmp');
}

function createTable($article, $key)
{
	$a = $article['Prix']*$article['Taux'];
	$b = $article['Prix']*$article['Taux']+$article['Prix'];
	echo "<tr>";
	echo "<td>$key</td>";
	echo "<td>".$article['Prix']."</td>";
	echo "<td>".$article['Taux']."</td>";
	echo "<td>$a</td>";
	echo "<td bgcolor='red'>$b</td>";
	echo "</tr>";
}

echo "<style> 
            table, td, th { 
                border: 1px solid black; 
                border-collapse: collapse;
            }
            td {
				width:100px;
            }
        </style> ";

echo "<table>
		<th>Article</th>
		<th>Prix</th>
		<th><a href='".$_SERVER['PHP_SELF']."?sortTVA' name='sortTVA'>Taux T.V.A.</a></th>
		<th>Taxes</th>
		<th>Coût T.T.C.</th>";
		
array_walk($prix_taux, 'createtable');
		
echo "</table>";

?>
