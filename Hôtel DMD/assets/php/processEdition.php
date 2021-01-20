<?php 
    include 'connect.php';
    if (isset($_SESSION['id'])) {
        $requser = $bdd->prepare('SELECT * FROM users WHERE iduser = ?');
        $requser->execute(array($_SESSION['id']));
        $userinfo = $requser->fetch();

        if (isset($_POST['newCivilite']) AND !empty($_POST['newCivilite']) AND $_POST['newCivilite'] != $userinfo['civilite']) {
            $newCivilite = htmlspecialchars($_POST['newCivilite']);
            $insertCivilite = $bdd->prepare('UPDATE users SET civilite = ? WHERE iduser = ?');
            $insertCivilite->execute(array($newCivilite, $_SESSION['id']));
            header("Location: monCompte.php?confirmation=Modification(s) éffectuées&userid=".$_SESSION['id']);
        }

        if (isset($_POST['newNom']) AND !empty($_POST['newNom']) AND $_POST['newNom'] != $userinfo['nom']) {
            $newNom = htmlspecialchars($_POST['newNom']);
            $insertNom = $bdd->prepare('UPDATE users SET nom = ? WHERE iduser = ?');
            $insertNom->execute(array($newNom, $_SESSION['id']));
    		header("Location: monCompte.php?confirmation=Modification(s) éffectuées&userid=".$_SESSION['id']);     
        }

        if (isset($_POST['newPrenom']) AND !empty($_POST['newPrenom']) AND $_POST['newPrenom'] != $userinfo['prenom']) {
            $newPrenom = htmlspecialchars($_POST['newPrenom']);
            $insertPrenom = $bdd->prepare('UPDATE users SET prenom = ? WHERE iduser = ?');
            $insertPrenom->execute(array($newPrenom, $_SESSION['id']));
			header("Location: monCompte.php?confirmation=Modification(s) éffectuées&userid=".$_SESSION['id']);        
        }

        if (isset($_POST['newNumeroTel']) AND !empty($_POST['newNumeroTel']) AND $_POST['newNumeroTel'] != $userinfo['numerotel']) {
            $newNumeroTel = htmlspecialchars($_POST['newNumeroTel']);
            $insertNumeroTel = $bdd->prepare('UPDATE users SET numerotel = ? WHERE iduser = ?');
            $insertNumeroTel->execute(array($newNumeroTel, $_SESSION['id']));
			header("Location: monCompte.php?confirmation=Modification(s) éffectuées&userid=".$_SESSION['id']);        
        }

        if (isset($_POST['motdepasseActuel']) AND !empty($_POST['motdepasseActuel']) AND isset($_POST['newMotdepasse']) AND !empty($_POST['newMotdepasse'])) {
            if (password_verify($_POST['motdepasseActuel'], $userinfo['motdepasse'])) {
                $newMotdepasse = password_hash($_POST['newMotdepasse'], PASSWORD_BCRYPT);
                $insertmotdepasse = $bdd->prepare('UPDATE users SET motdepasse = ? WHERE iduser = ?');
                $insertmotdepasse->execute(array($newMotdepasse, $_SESSION['id']));
                header("Location: monCompte.php?confirmation=Modification(s) éffectuées&userid=".$_SESSION['id']);
            }else{
                $erreurmdpdifferent = "Le mot de passe saisie est incorrect";
            }
        }
    }else{
    	header("location:index.php");
    }
?>