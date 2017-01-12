<?php

if(!empty($_GET) || !empty($_POST)){
	echo $_GET['name']." ".$_GET['prenom']." ".$_GET['genre'];
}else{
	include __DIR__ . '/../exercice5/index.php';
}


?>