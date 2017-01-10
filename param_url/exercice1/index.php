<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>parm Url</title>
</head>
<body>
	<?php 
		if(isset($_GET["nom"]) AND isset($_GET["prenom"])){
			echo 'Bonjour' .$_GET["nom"].' '.$_GET["prenom"].'!';
		}else{
			echo 'il faut renseigner un nom et un prénom!';
		}
	?>
</body>
</html>