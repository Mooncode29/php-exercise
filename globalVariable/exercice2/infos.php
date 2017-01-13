<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ma deuxième page</title>
</head>
<body>
	<p>Salut<?= $_SESSION['nom']. " ". $_SESSION['prenom'];?></p>
	<div>
		<p>Tu as <?= " ".$_SESSION['age'];?></p>
	</div>
</body>
</html>