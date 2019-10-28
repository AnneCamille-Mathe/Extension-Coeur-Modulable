<?php

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
		// Testons si l'extension est autorisée
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('unitypackage');
        if (in_array($extension_upload, $extensions_autorisees))
        {
         	// On peut valider le fichier et le stocker définitivement
          
          /*
        	move_uploaded_file($_FILES['monfichier']['tmp_name'], 'C:\Users\Utilisateur\Documents\ESEO\I2\Nouvelle Application\Assets\Scenes' 
			. basename($_FILES['monfichier']['name']));
            */
            shell_exec("C:\Program Files\Unity Hub\Unity Hub.exe");
            echo "L'envoi du fichier a bien été effectué !";
            

			echo "<br>";
          }
		  else{
		  	echo "failed";
		  }
}
else{
	echo "failed";
}
?>