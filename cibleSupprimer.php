<?php

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier2']) AND $_FILES['monfichier2']['error'] == 0)
{
		// Testons si l'extension est autorisée
		$infosfichier = pathinfo($_FILES['monfichier2']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('unity');
        if (in_array($extension_upload, $extensions_autorisees))
        {
         	// On regarde le nom du fichier
        	$absolute_name = ($_FILES['monfichier2']['name']);
			// Si le fichier existe on le supprime
			$file_path = 'C:/Users/Utilisateur/Documents/ESEO/I2/Nouvelle Application/Assets/Scenes/' .$absolute_name;
			echo $file_path;
			echo "<br>";
			// TODO - AJOUTER UNE CONDITION POUR NE PAS SUPPRIMER NOS FICHIERS UTILES
			
			if(file_exists($file_path)){
				if($file_path != "C:/Users/Utilisateur/Documents/ESEO/I2/Nouvelle Application/Assets/Scenes/GameOver.unity"
					&& $file_path != "C:/Users/Utilisateur/Documents/ESEO/I2/Nouvelle Application/Assets/Scenes/Level1.unity"
					&& $file_path != "C:/Users/Utilisateur/Documents/ESEO/I2/Nouvelle Application/Assets/Scenes/Menu.unity"){
					unlink($file_path);
					echo "<br>";
					echo "La suppression du fichier a bien été effectué !";
					echo "<br>";
				}
				else {
					echo "Vous n'avez pas les droits pour supprimer ce fichier";
				}
			}

			/*
			
			*/

			// Sinon on affiche un message
			else {
				echo "Le fichier trouvé n'existe pas";
			}
			
          }
		  else{
		  	echo "failed";
		  }
}
else{
	echo "envoi failed";
}

?>