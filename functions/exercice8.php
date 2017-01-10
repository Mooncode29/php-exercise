<h2>Exercice 8</h2>
<?php
	function addNumbers ($nb1=4, $nb2=8, $nb3=9){
		return $nb1 + $nb2 + $nb3;
	}
echo "avec valeurs par défaut : ".addNumbers ()."\n";
echo "avec d'autres valeurs : ".addNumbers(3,7,10);
?>