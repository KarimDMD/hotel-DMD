<?php 
	include 'connect.php';
 	date_default_timezone_set('UTC');

 	// VERIFICATION FORMULAIRE, CALCUL PRIX
	if (isset($_POST['btnValider'])) {
		$dateActuel = date('Y-m-d');
		$dateArrive = $_POST['dateArrive'];
		$dateDepart = $_POST['dateDepart'];
		$typeChambre = $_POST['typeChambre'];
		$nbrPersonne = $_POST['nbrPersonne'];
		if (isset($_POST['petitDej'])) {
			$petitDejOuiNon = "Oui";
		}else{
			$petitDejOuiNon ="Non";
		}
		// verifie si la date d'arrivé est superieur à la date du jour
		if ($dateArrive >= $dateActuel) {
			// si la date d'arrivé est bien avant celle de départ
			if ($dateArrive < $dateDepart) {
				// recupere le nombre de jour entre deux dates
				$datetime1 = new DateTime($dateArrive);
				$datetime2 = new DateTime($dateDepart);
				$interval = $datetime1->diff($datetime2);
				$diff =  $interval->format('%a');

				// si aucune chambre n'a été selectionne
				if ($typeChambre == "null") {
					$erreurTypeChambre = "Veuillez sélectionner un type de chambre"."<br>";
				}
				// si aucun nombre de personne n'a ete selectione
				if ($nbrPersonne == "null") {
					$erreurNbrPersonne = "Veuillez sélectionner un nombre de personne"."<br>";
				}

				// verification du nombre de personne en fonction du type de chambre
				if ($typeChambre == "Simple") {
					if ($nbrPersonne <= 2) {
						// calcul du prix final
						$reqprix = $bdd->prepare('SELECT prixchambre FROM chambre WHERE typechambre = ?');
				    	$reqprix->execute(array($typeChambre));
						$prixinfo = $reqprix->fetch();
						$prixchambre = $prixinfo['prixchambre'];
						if (isset($_POST['petitDej'])) {
							$prixPetitDej = 5 * $nbrPersonne;
							$prixTotalPetitDej = $prixPetitDej * $diff;
							$prixTotalChambre = $prixchambre * $diff;
							$prixFinal = $prixTotalPetitDej + $prixTotalChambre;
						}else{
							$prixTotalChambre = $prixchambre * $diff;
							$prixFinal = $prixTotalChambre;
						}

						$_SESSION["recapdateArrive"] = $dateArrive;
						$_SESSION["recapdateDepart"] = $dateDepart;
						$_SESSION["recaptypeChambre"] = $typeChambre;
						$_SESSION["recapnbrPersonne"] = $nbrPersonne;
						$_SESSION["recappetitDej"] = $petitDejOuiNon;
						$_SESSION["recapprixFinal"] = $prixFinal;
						header("Location: recapReservation.php?userid=".$_SESSION['id']);
					}else{
						$erreur2PersonnesMax= "Une chambre simple peut accueillir 2 personnes max";
					}
				}
				if ($typeChambre == "Double") {
					if ($nbrPersonne <= 3) {
						// calcul du prix final
						$reqprix = $bdd->prepare('SELECT prixchambre FROM chambre WHERE typechambre = ?');
				    	$reqprix->execute(array($typeChambre));
						$prixinfo = $reqprix->fetch();
						$prixchambre = $prixinfo['prixchambre'];
						if (isset($_POST['petitDej'])) {
							$prixPetitDej = 5 * $nbrPersonne;
							$prixTotalPetitDej = $prixPetitDej * $diff;
							$prixTotalChambre = $prixchambre * $diff;
							$prixFinal = $prixTotalPetitDej + $prixTotalChambre;
						}else{
							$prixTotalChambre = $prixchambre * $diff;
							$prixFinal = $prixTotalChambre;
						}

						$_SESSION["recapdateArrive"] = $dateArrive;
						$_SESSION["recapdateDepart"] = $dateDepart;
						$_SESSION["recaptypeChambre"] = $typeChambre;
						$_SESSION["recapnbrPersonne"] = $nbrPersonne;
						$_SESSION["recappetitDej"] = $petitDejOuiNon;
						$_SESSION["recapprixFinal"] = $prixFinal;
						header("Location: recapReservation.php?userid=".$_SESSION['id']);
					}else{
						$erreur3PersonnesMax= "Une chambre double peut accueillir 3 personnes max";
					}		
				}
				if ($typeChambre == "Triple") {
					if ($nbrPersonne > 2) {
						// calcul du prix final
						$reqprix = $bdd->prepare('SELECT prixchambre FROM chambre WHERE typechambre = ?');
				    	$reqprix->execute(array($typeChambre));
						$prixinfo = $reqprix->fetch();
						$prixchambre = $prixinfo['prixchambre'];
						if (isset($_POST['petitDej'])) {
							$prixPetitDej = 5 * $nbrPersonne;
							$prixTotalPetitDej = $prixPetitDej * $diff;
							$prixTotalChambre = $prixchambre * $diff;
							$prixFinal = $prixTotalPetitDej + $prixTotalChambre;
						}else{
							$prixTotalChambre = $prixchambre * $diff;
							$prixFinal = $prixTotalChambre;
						}

						$_SESSION["recapdateArrive"] = $dateArrive;
						$_SESSION["recapdateDepart"] = $dateDepart;
						$_SESSION["recaptypeChambre"] = $typeChambre;
						$_SESSION["recapnbrPersonne"] = $nbrPersonne;
						$_SESSION["recappetitDej"] = $petitDejOuiNon;
						$_SESSION["recapprixFinal"] = $prixFinal;
						header("Location: recapReservation.php?userid=".$_SESSION['id']);
					}else{
						$erreur3PersonnesMin= "Une chambre triple accueil au minimum 3 personnes";
					}	
				}
			}else{
				$erreurDateArriveInferieur= "La date d'arrivée doit être inférieur à la date de départ";
			}
		}else{
			$erreurDateArriveSuperieur= "La date d'arrivée doit être supérieur ou égal à la date du jour";
		}
	}

	// ---------------------------------------------------------------------

	// RESERVATION DANS BDD
	if (isset($_POST['btnReserver'])) {
		// preparation données
		$Ruserid = $_SESSION['id'];
		$RtypeChambre = $_SESSION['recaptypeChambre'];
		$RdateArrive = $_SESSION['recapdateArrive'];
		$RdateDepart = $_SESSION['recapdateDepart'];
		$RnbrPersonne = $_SESSION['recapnbrPersonne'];
		$RpetitDej = $_SESSION['recappetitDej'];
		$Rprix = $_SESSION['recapprixFinal'];		

		// recuperation nombre de chambre en fonction du type choisi
		$reqlistchambre = $bdd->prepare("SELECT * FROM chambre WHERE typechambre = ?");
		$reqlistchambre->execute(array($RtypeChambre));		
		$nbrLigneChambre = $reqlistchambre->rowCount();

		// boucle sur chaque chambre
		$boucle = "true";
		$i = 0;
		while ($boucle == "true" AND $i < $nbrLigneChambre) {
			// recuperation données de la chambre en cours
			$infoChambre = $reqlistchambre->fetch();
			$idChambre = $infoChambre['idchambre'];
			
			// recuperation nombre de reservation pour la chambre en cours
			$reqlistreservation = $bdd->prepare("SELECT * FROM reservation WHERE idchambre = ?");
			$reqlistreservation->execute(array($idChambre));		
			$nbrLigneReservation = $reqlistreservation->rowCount();
			if ($nbrLigneReservation == 0) {
				$insertreservation = $bdd->prepare("INSERT INTO reservation (iduser, idchambre, typechambre, datearrive, datedepart, nbrpersonne, prix, petitdej) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
				$insertreservation->execute(array($Ruserid, $idChambre, $RtypeChambre, $RdateArrive, $RdateDepart, $RnbrPersonne, $Rprix, $RpetitDej));
				$resultatReservation = "ok";
				for ($i=0; $i <= 9; $i++) { 
					$numeroAleatoire = rand(0, 9);
					$numeroReservation = $numeroReservation.$numeroAleatoire;
				}
				header("Location: resultatReservation.php?userid=".$_SESSION['id']."&resultatReservation=".$resultatReservation."&idreservation=".$numeroReservation);
				$boucle = "false";
			}else{
				// boucle sur chaque reservation de la chambre en cours
				$boucle2 = "true";
				$j = 0;
				while ($boucle2 == "true" AND $j < $nbrLigneReservation) {
					$infoReservation = $reqlistreservation->fetch();
					$dateArriveReservation = $infoReservation['datearrive'];
					$dateDepartReservation = $infoReservation['datedepart'];
					// strtotime --> secondes ecoulées depuis 1970
					if (strtotime($dateArriveReservation) <= strtotime($RdateArrive) AND strtotime($RdateArrive) <= strtotime($dateDepartReservation)) {
						$boucle2 = "false";
						$i++;
					}else{
						if (strtotime($dateArriveReservation) <= strtotime($RdateDepart) AND strtotime($RdateDepart) <= strtotime($dateDepartReservation)) {
							$boucle2 = "false";
							$i++;
						}else{
							if (strtotime($RdateArrive) <= strtotime($dateArriveReservation) AND strtotime($dateArriveReservation) <= strtotime($RdateDepart)) {
								$boucle2 = "false";
								$i++;
							}else{
								if (strtotime($RdateArrive) <= strtotime($dateDepartReservation) AND strtotime($dateDepartReservation) <= strtotime($RdateDepart)) {
									$boucle2 = "false";
									$i++;
								}else{
									$j++;
								}
							}
						}
					}
				}

				if ($boucle2 == "true") {
					$insertreservation = $bdd->prepare("INSERT INTO reservation (iduser, idchambre, typechambre, datearrive, datedepart, nbrpersonne, prix, petitdej) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
					$insertreservation->execute(array($Ruserid, $idChambre, $RtypeChambre, $RdateArrive, $RdateDepart, $RnbrPersonne, $Rprix, $RpetitDej));
					for ($i=0; $i <= 9; $i++) { 
						$numeroAleatoire = rand(0, 9);
						$numeroReservation = $numeroReservation.$numeroAleatoire;
					}
					$resultatReservation = "ok";
					header("Location: resultatReservation.php?userid=".$_SESSION['id']."&resultatReservation=".$resultatReservation."&idreservation=".$numeroReservation);
					$boucle = "false";
				}
			}
		}
		if ($boucle == "true") {
			$resultatReservation = "erreur";
			header("Location: resultatReservation.php?userid=".$_SESSION['id']."&resultatReservation=".$resultatReservation);
		}
	}
?>