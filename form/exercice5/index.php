<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire exo 5</title>
</head>
<body>
<form action="" method="GET">
	<select name="genre">
		<option value="Mme">Mme</option>
		<option value="M.">M.</option>				
	</select>
	<div>
		<label for="name">Nom</label>
		<input type="text" name="name">
	</div>
	<div>
		<label for="prenom">Prénom</label>
		<input type="text" name="prenom">
	</div>
	<button type="submit" name="envoyer">Envoyer</button>
</form>
<!-- <div>
	<ul>
		<li><?= "nom :"." ".$_GET['name']." "."prénom :"." ".$_GET['prenom'] ?></li>
		<li><?="civilité"." ".$_GET['genre'] ?></li>
	</ul>
</div> -->
</body>
</html>