<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="formulaire.css" />
        <title>Mode Developpeur </title>
    </head>
    <body>

		<h2>Bienvenue dans le mode développeur ♠ </h2>
		<b><u>Fichier à transmettre :</u></b>
		<form action="cible.php" method="post" enctype="multipart/form-data">
       		 <p>
                Package Unity (500M max) :<br />
                <input type="file" required name="monfichier" /><br /><br />
				<input type="submit" value="Envoyer le fichier" /><br />
        	</p>
		</form>
		
		<br /><b><u>Fichier à supprimer :</u></b>
		<form action="cibleSupprimer.php" method="post" enctype="multipart/form-data">
       		 <p>
                Scène Unity (500M max) :<br />
                <input type="file" required name="monfichier2" /><br /><br />
				<input type="submit" value="Supprimer le fichier" /><br />
        	</p>
		</form>
			<?php
			//Retour à la bage de connexion
			$url = "formulaireBaseDeDonnees.php";
    		$texte = "<br> retour à la page de connexion";
    		echo '<a href = "'.$url.'">'.$texte.'</a>';
			
			?>
		
    </body>
</html>