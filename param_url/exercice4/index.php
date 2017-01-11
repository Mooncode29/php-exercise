<?php
	if(isset($_GET['langage']) && isset($_GET['serveur'])){
		echo "langage :"." ".$_GET['langage']." "."et serveur: ".$_GET['serveur'];
	}else{
		echo "Il faut renseigner le langage et le serveur";
	}
?>