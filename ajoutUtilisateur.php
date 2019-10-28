<!DOCTYPE html>
<html>
    <head>
        <title>Mode Developpeur </title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="ajoutUtilisateur.css" />
    </head>
    <body style ="background-color:hsl(232,8%,91%);">
		<h3>Bienvenue dans le mode développeur ♠ </h3>
		<img src="C:\Users\Utilisateur\Documents\ESEO\I2\ImagesStage\capgemini.png" alt=""/>
		<p><b><u>Fichier à transmettre :</u></b></p>
		<form action="ajoutUtilisateurBD.php" method="post" enctype="multipart/form-data">
       		 <p>
                Veuillez saisir le Login :<br />
				<input type="text" name="login" value="" /><br /><br />
				
				Veuillez saisir le mot de passe :<br />
				<input type="password" name="motdepasse" value="" /><br /><br />
	
				Veuillez saisir le rôle :<br />
				<SELECT name="role" size="1">
					<OPTION selected>  Utilisateur 
					<OPTION>  Administrateur 
				</SELECT><br /><br />
				
				Veuillez saisir le nom :<br />
				<input type="text" name="nom" value="" /><br /><br />
				
				Veuillez saisir le prénom :<br />
				<input type="text" name="prenom" value="" /><br /><br />
				
				Veuillez saisir l'email :<br />
				<input type="text" name="email" value="" /><br /><br />
				
				<input type="submit" value="Envoyer le formulaire" /><br />
        	</p>
		</form>
		
			
			<?php
			
			//Retour à la bage de connexion
			$url = "formulaireBaseDeDonnees.php";
    		$texte = "<br> retour à la page de connexion";
    		echo '<a href = "'.$url.'">'.$texte.'</a>';
			
			?>
		</form>
		
    </body>
</html>