<?php 
    session_start();
    include 'connect.php';
    if (isset($_GET['userid']) AND $_GET['userid']==true AND $_GET['userid'] > 0) {
    	// recup valeur de userid dans l'adresse du site
    	$getid = intval($_GET['userid']);
    	$requser = $bdd->prepare('SELECT * FROM users WHERE iduser = ?');
    	$requser->execute(array($getid));
    	$userinfo = $requser->fetch(); 

        $reqreservation = $bdd->prepare('SELECT * FROM reservation WHERE iduser = ?');
        $reqreservation->execute(array($getid));
        $nbrLigneReservation = $reqreservation->rowCount();
    }

    if (isset($_POST['supprimer'])) {
    	if (isset($_POST['motdepasseActuel']) AND !empty($_POST['motdepasseActuel'])) {
           	if (password_verify($_POST['motdepasseActuel'], $userinfo['motdepasse'])) {
                $reqsupuser = $bdd->prepare('DELETE FROM users WHERE iduser = ?');
                $reqsupuser->execute(array($_SESSION['id']));
                $_SESSION = array();
                session_destroy();
            }else{
                header("location:monCompte.php?erreurmotdepasse= Le mot de passe est incorrect&userid=".$_SESSION['id']);
            }
        }else{
        	header("location:monCompte.php?champsincomplet= Tous les champs doivent être complétes&userid=".$_SESSION['id']);
    	}
    }
?>