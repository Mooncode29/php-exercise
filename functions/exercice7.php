<h2>Exercice 7</h2>
<?php
	function genderAndAge($genre, $age){
		if($genre==="homme" && $age>18){
			return "Vous êtes un"." ".$genre." "."et vous êtes majeur \n";
		}elseif($genre==="homme" && $age<18){
			return "Vous êtes un"." ".$genre." "."et vous êtes mineur";
		}elseif ($genre==="femme" && $age>18) {
			return "Vous êtes une"." ".$genre." "."et vous êtes majeure \n";
		}
		else{
			return "Vous êtes une"." ".$genre." "."et vous êtes mineure";
		}
	}
echo genderAndAge("femme", 30);
?>