<?php
session_start();
$_SESSION['nom'] = 'Brown';
$_SESSION['prenom']= 'Alphonse';
$_SESSION['age'] = 30;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session</title>
</head>
<body>
<a href="infos.php">Des infos sur toi?</a>
	
</body>
</html>