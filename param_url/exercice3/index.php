<?php
	if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
		echo "date debut :"." ".$_GET['dateDebut']." "."et date fin : ".$_GET['dateFin'];
	}else{
		echo "Il faut renseigner une date de début et une date de fin";
	}
?>