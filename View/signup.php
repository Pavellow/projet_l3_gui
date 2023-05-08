<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="../public/style/connect.css"> <!-- Inclusion de la feuille de style pour la mise en page -->
</head>
<body>
	<h1>S'inscrire</h1> <!-- Titre principal de la page -->
	
	<form method="post"> <!-- Formulaire d'inscription avec une méthode POST -->
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required><br><br> <!-- Champ de saisie du nom avec l'attribut required qui oblige l'utilisateur à remplir ce champ -->

		<label for="prenom">Prénom :</label>
		<input type="text" name="prenom" id="prenom" required><br><br> <!-- Champ de saisie du prénom avec l'attribut required -->

		<label for="email">Email :</label>
		<input type="email" name="email" id="email" required><br><br> <!-- Champ de saisie de l'adresse email avec l'attribut required -->

		<label for="mot_de_passe">Mot de passe :</label>
		<input type="password" name="motdepasse" id="motdepasse" required><br><br> <!-- Champ de saisie du mot de passe avec l'attribut required et le type password pour masquer le texte saisi -->

		<label for="pseudo">Pseudo</label>
		<input type="text" name="pseudo" id="pseudo" required><br><br> <!-- Champ de saisie du pseudo avec l'attribut required -->

		<button type="submit" value="Ajouter"> Ajouter </button>  <!-- Bouton pour soumettre le formulaire -->
	</form>
</body>

</html>
