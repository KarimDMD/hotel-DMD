<?php  
	session_start();
	include 'connect.php';
	if (isset($_POST['btnConnexion'])) {
		if (!empty($_POST['email']) AND !empty($_POST['motdepasse'])) {
			$email = htmlspecialchars($_POST['email']);
			$requser = $bdd->prepare('SELECT * FROM users WHERE email = ?');
			$requser->execute(array($email));
			$userinfo = $requser->fetch();
			if (password_verify($_POST['motdepasse'], $userinfo['motdepasse'])) {
   				$_SESSION['id'] = $userinfo['iduser'];
				header("location:../../monCompte.php?userid=".$_SESSION['id']);
			}else{
			    header("location:../../signIn.php?erreurchampsincorrect= Email ou mot de passe incorrect");
			}
		}else{
			header("location:../../signIn.php?erreurchampsvide= Tous les champs doivent être complétés");
		}
	}	
?>