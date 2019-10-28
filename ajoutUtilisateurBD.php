<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
	

	// On ajoute une entrée dans la table utilisateurs
	$req = $bdd->prepare('INSERT INTO utilisateurs(Login, motDePasse, role, nom, prenom, email) VALUES(?, ?, ?, ?, ?, ?)');
	$req->execute(array($_POST['login'], $_POST['motdepasse'],  $_POST['role'],  $_POST['nom'],  $_POST['prenom'],  $_POST['email']));	
	
	echo "succeed";


?>
