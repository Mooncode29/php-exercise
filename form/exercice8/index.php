<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire exo 7</title>
</head>
<body>
<?php

	if(empty($_POST)){
?>
	<form action="" method="post" enctype="multipart/form-data">
		<div>
			<input type="file" name="fichier">
		</div>
		<select name="genre">
			<option value="Mme">Mme</option>
			<option value="M.">M.</option>				
		</select>
		<div>
			<label for="name">Nom</label>
			<input require="required" type="text" name="name">
		</div>
		<div>
			<label for="prenom">Prénom</label>
			<input require="required" type="text" name="prenom">
		</div>
		<button type="submit" name="envoyer">Envoyer</button>
	</form>
<?php
}else{
	echo $_POST['genre']." ".$_POST['name']." ".$_POST['prenom']." ".$_FILES['fichier']['name'];
}
?>
</body>
</html>





<?php
$infofichier = pathinfo($_FILES['fichier']['name']);
$extension = $infofichier['extension'];

if($extension === 'pdf'){
	echo $extension;
}else if(!empty($_FILES)){
	echo 'extension de fichier non autorisée!';
}?>