<?php 
	include 'connect.php';
	if (isset($_POST["inscription"])) {
		if (!empty($_POST['civilite']) AND ($_POST['nom']) AND ($_POST['prenom']) AND ($_POST['email']) AND ($_POST['numerotel']) AND ($_POST['motdepasse']) AND ($_POST['motdepasseconfirmer'])) {
			// recuperation des données
			$civilite = htmlspecialchars($_POST['civilite']);
			$nom = htmlspecialchars($_POST['nom']);
			$prenom = htmlspecialchars($_POST['prenom']);
			$email = htmlspecialchars($_POST['email']);
			$numerotel = htmlspecialchars($_POST['numerotel']);
			$motdepasse = password_hash($_POST['motdepasse'], PASSWORD_BCRYPT);

			$nomtaille = strlen($nom);
			if ($nomtaille <= 255) {
				$prenomtaille = strlen($prenom);
				if ($prenomtaille <= 255) {
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						$reqemailuniq = $bdd->prepare("SELECT * FROM usersignup WHERE email = ?");
						$reqemailuniq->execute(array($email));
						$emailexist = $reqemailuniq->rowcount();
						if ($emailexist == 0) {
							$numeroteltaille = strlen($numerotel);
							if ($numeroteltaille == 10) {
								if (is_numeric($numerotel)) {
									if (preg_match("#^0[0-9]{9}$#",$numerotel)) {											
										$motdepassetaille = strlen($_POST['motdepasse']);
										if ($motdepassetaille >= 8) {										
											if ($motdepassetaille < 100) {
												if ($_POST['motdepasse'] == $_POST['motdepasseconfirmer']) {
													$insertmembre = $bdd->prepare("INSERT INTO users (civilite, nom, prenom, email, numerotel, motdepasse) VALUES (?, ?, ?, ?, ?, ?)");
													$insertmembre->execute(array($civilite, $nom, $prenom, $email, $numerotel, $motdepasse));
													header("location:../../bienvenue.php?comptecree= Votre compte a bien été créé");
												}else{
													header("location:../../signUp.php?erreurmotdepassedifferent= Les mots de passe sont différents");
												}
											}else{
												header("location:../../signUp.php?erreurmotdepassetropcaractere= Votre mot de passe ne doit pas dépasser 100 caractères");	
											}
										}else{
											header("location:../../signUp.php?erreurmotdepassecourt= Votre mot de passe doit contenir minimum 8 caractères");
										}
									}else{
										header("location:../../signUp.php?erreurnumerotelformat= Votre numéro de téléphone n'est pas un numéro valide. Format: 0601020304");
									}
								}else{
									header("location:../../signUp.php?erreurnumerotelchiffre= Votre numéro de téléphone doit contenir uniquement des chiffres");
								}
							}else{
								header("location:../../signUp.php?erreurnumeroteltropcaractere= Votre numéro de téléphone doit contenir 10 chiffres, sans espace ou caractère spécial");	
							}
						}else{
							header("location:../../signUp.php?erreuremailexist= Adresse email déjà utilisée");
						}	
					}else{
						header("location:../../signUp.php?erreurmailivalide= Adresse email invalide");
					}			
				}else{
					header("location:../../signUp.php?erreurprenomtropcaractere= Votre prenom ne doit pas dépasser 255 caractères");
				}
			}else{
				header("location:../../signUp.php?erreurnomtropcaractere= Votre nom ne doit pas dépasser 255 caractères");
			}
		}else{
			header("location:../../signUp.php?erreurchampsvide= Tous les champs doivent être complétés");
		}
	}
?>