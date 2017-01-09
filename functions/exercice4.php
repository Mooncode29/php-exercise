<h2>Exercice 4</h2>
<?php
function compareNumbers($a,$b){
	if($a>$b){
		return "le premier nombre est plus grand";
	}
	else if($a<$b){
		return "le premier nombre est plus petit";
	}
	else{
		return "les deux nombres sont identiques";
	}
}
var_dump(compareNumbers(8, 2));
?>