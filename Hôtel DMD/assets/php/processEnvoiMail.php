<?php
	session_start();
	if (isset($_POST['envoyer'])) {
		if (!empty($_POST['nom']) AND ($_POST['prenom']) AND ($_POST['email']) AND ($_POST['message'])){
			$header="MIME-Version: 1.0\r\n";
			$header.='From:"Hôtel DMD"'."\n";
			$header.='Content-Type:text/html; charset="uft-8"'."\n";
			$header.='Content-Transfer-Encoding: 8bit';

			$nom = htmlspecialchars($_POST['nom']);
			$prenom = htmlspecialchars($_POST['prenom']);
			$email = htmlspecialchars($_POST['email']);
			$message = htmlspecialchars($_POST['message']);

			$messageenvoyer= "Nom: ".$nom."<br>"."Prenom: ".$prenom."<br>"."Email: ".$email."<br>"."Message: ".$message;

			mail("hoteldmd92@gmail.com", "Contact Hôtel DMD", $messageenvoyer, $header);
			header("location:../../contact.php?confirmation=Votre message a été envoyé&userid=".$_SESSION['id']);
		}else{
			header("location:../../contact.php?erreurchampsvide=Tous les champs doivent être complétés&userid=".$_SESSION['id']);
		}
	}
?>