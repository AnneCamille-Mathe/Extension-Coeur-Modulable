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
// On récupère tout le contenu de la table utilisateurs
$reponse = $bdd->query('SELECT * FROM utilisateurs');
$marqueur = 0;
// On regarde les entrées une à une
while ($donnees = $reponse->fetch())
{
	//On regarde si les login et mots de passe sont bons
	if ($donnees['Login'] == $_POST['login'] and $donnees['motDePasse'] == $_POST['motdepasse']){
		//L'administrateur peut ajouter des personnes à la base de données
		if($donnees['role'] == 'Administrateur'){
			//Mode supression et ajout des scènes
			$url = "formulaire.php";
    		$texte = "Suppression et ajout des scènes";
    		echo '<a href = "'.$url.'">'.$texte.'</a>'; echo "<br/>";
			
			//Mode ajout d'utilisateur
			$url = "ajoutUtilisateur.php";
    		$texte = "Ajout d'un utilisateur";
			echo "<br/>";
    		echo '<a href = "'.$url.'">'.$texte.'</a>'; echo "<br/>";
			
			//Retour à la page de connexion
			$url = "formulaireBaseDeDonnees.php";
    		$texte = "Retour à la page de connexion";
			echo "<br/>";
    		echo '<a href = "'.$url.'">'.$texte.'</a>';
			
			$marqueur = 1;
		}
		//L'utilisateur peut ajouter des scènes ou en supprimer
		else if($donnees['role'] == 'Utilisateur') {
			header('Location: formulaire.php');
			$marqueur = 1;
		}
	}
}

$reponse->closeCursor(); // Termine le traitement de la requête

if($marqueur != 1){
	//Retour à la page de connexion
	$urla = "formulaireBaseDeDonnees.php";
	echo "Login ou mot de passe eronné";
	$textea = "<br> retour à la page de connexion";
	echo '<a href = "'.$urla.'">'.$textea.'</a>';
}




?>