<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="../public/style/connect.css">

</head>
<body>
	<h1>S'inscrire</h1>
	
	<form method="post">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required><br><br>

		<label for="prenom">Prénom :</label>
		<input type="text" name="prenom" id="prenom" required><br><br>

		<label for="email">Email :</label>
		<input type="email" name="email" id="email" required><br><br>

		<label for="mot_de_passe">Mot de passe :</label>
		<input type="password" name="motdepasse" id="motdepasse" required><br><br>

		<label for="pseudo">Pseudo</label>
		<input type="text" name="pseudo" id="pseudo" required><br><br>

		<button type="submit" value="Ajouter"> Ajouter </button> 
	</form>
</body>

</html>
