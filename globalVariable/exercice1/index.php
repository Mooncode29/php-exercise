<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Golabal variable- exo 1</title>
</head>
<body>


<ul><?= "User Agent : "." ".($_SERVER["HTTP_USER_AGENT"]);?></ul>
<ul><?= "Adresse IP :"." ".($_SERVER["REMOTE_ADDR"]);?></ul>
<ul><?= "Nom du Serveur : ". " ".($_SERVER["SERVER_NAME"]);?></ul>

</body>
</html>