<?php
setcookie('pseudo',$_POST['pseudo'], time () + 365*24*3600);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log in</title>
</head>
<body>

<form action="" method="post">
	<div>
		<p><label for="login">Identifiant</label></p>
		<p><input type="text" name="pseudo"></p>
	</div>
	<div>
		<p><label for="mdp">Mot de passe</label></p>
		<p><input type="text" name="mdp"></p>
	</div>
	<button>Se connecter</button>
</form>
</body>
</html>