<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Boostrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<!-- FONT Roboto -->
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<title>Hôtel DMD - Inscription</title>
	</head>

	<!-- --------------------------FIN HEAD------------------------------- -->

	<body>
		<header>
			<!-------------------------------Navbar Mobile--------------------------------------->
			<nav class="navbarMobile navbar navbar-light light-blue lighten-4">
			 	<!-- Navbar Icone titre -->
			  	<div class="navbar-brand divLogoHotelDMD col-7">
					<img src="assets/img/logoHotelDMD.png" class="logoHotelDMD" alt="Logo Hotel DMD">
					<?php 
				        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
				        {
				    ?>
				   		<a class="navItem" href="index.php?userid=<?php echo $_SESSION['id'] ?>">Accueil</a>         
				    <?php
				        }else{
				    ?>
				        <a class="navItem" href="index.php">Accueil</a>
				    <?php
				        }
				    ?>
				</div>

				<!-- Bouton -->
				<button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

				<!-- Menu déroulant -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">

				    <!-- Liens -->
				    <?php 
				        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
				        {
				    ?>
				   		<ul class="navbar-nav">
							<li class="nav-item">
								<a href="reservation.php?userid=<?php echo $_SESSION['id'] ?>" class="navItem">Reserver</a>
							</li>
							<li class="nav-item">
								<a href="tarif.php?userid=<?php echo $_SESSION['id'] ?>" class="navItem">Tarifs</a>
							</li>
							<li class="nav-item">
								<a href="contact.php?userid=<?php echo $_SESSION['id'] ?>" class="navItem">Contact</a>
							</li>
						</ul>                      
				    <?php
				        }else{
				    ?>
				    	<ul class="navbar-nav">
							<li class="nav-item">
								<a href="reservation.php" class="navItem">Reserver</a>
							</li>
							<li class="nav-item">
								<a href="tarif.php" class="navItem">Tarifs</a>
							</li>
							<li class="nav-item">
								<a href="contact.php" class="navItem">Contact</a>
							</li>
						</ul>
				    <?php
	        			}
	    			?>

	    			<ul class="navbar-nav">
						<?php 
					        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
					        {
					    ?>
					    	<li class="nav-item">
								<a href="monCompte.php?userid=<?php echo $_SESSION['id'] ?>" class="navItem">Mon Compte</a>
							</li> 
					   		<li class="nav-item">
								<a href="assets/php/processSignOut.php" class="navItem">Deconnexion</a>
							</li>                        
					    <?php
					        }else{
					    ?>
					    	<li class="nav-item">
								<a href="signIn.php" class="navItem">Connexion</a>
							</li>
							<li class="nav-item">
								<a href="signUp.php" class="navItem">Inscription</a>
							</li>
					    <?php
		        			}
		    			?>
					</ul>
				</div>
			</nav>
			<!-------------------------------Fin Navbar Mobile--------------------------------------->

			<div class="divNavbar">
				<div class="divLogoHotelDMD col-7">
					<img src="assets/img/logoHotelDMD.png" class="logoHotelDMD" alt="Logo Hotel DMD">
					<?php 
				        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
				        {
				    ?>
				   		<a class="navItem" href="index.php?userid=<?php echo $_SESSION['id'] ?>">Accueil</a>         
				    <?php
				        }else{
				    ?>
				        <a class="navItem" href="index.php">Accueil</a>
				    <?php
				        }
				    ?>
				</div>
				<div class="divMenu col-5 d-flex">
					<div class="divMenu1 col-6">
						<nav class="navbar navbar-expand-lg navbar-light">
							<?php 
						        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
						        {
						    ?>
						   		<ul class="navbar-nav">
									<li class="nav-item">
										<a href="reservation.php?userid=<?php echo $_SESSION['id'] ?>" class="navItem">Reserver</a>
									</li>
									<li class="nav-item">
										<a href="tarif.php?userid=<?php echo $_SESSION['id'] ?>" class="navItem">Tarifs</a>
									</li>
									<li class="nav-item">
										<a href="contact.php?userid=<?php echo $_SESSION['id'] ?>" class="navItem">Contact</a>
									</li>
								</ul>                      
						    <?php
						        }else{
						    ?>
						    	<ul class="navbar-nav">
									<li class="nav-item">
										<a href="reservation.php" class="navItem">Reserver</a>
									</li>
									<li class="nav-item">
										<a href="tarif.php" class="navItem">Tarifs</a>
									</li>
									<li class="nav-item">
										<a href="contact.php" class="navItem">Contact</a>
									</li>
								</ul>
						    <?php
			        			}
			    			?>
						</nav>
					</div>
					<div class="divMenu2 col-6">
						<nav class="navbar navbar-expand-lg navbar-light">
							<ul class="navbar-nav">
								<?php 
							        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
							        {
							    ?>
							    	<li class="nav-item">
										<a href="monCompte.php?userid=<?php echo $_SESSION['id'] ?>" class="navItem navItemMonCompte">Mon Compte</a>
									</li> 
							   		<li class="nav-item">
										<a href="assets/php/processSignOut.php" class="navItem navItemDeconnexion">Deconnexion</a>
									</li>                        
							    <?php
							        }else{
							    ?>
							    	<li class="nav-item">
										<a href="signIn.php" class="navItem">Connexion</a>
									</li>
									<li class="nav-item">
										<a href="signUp.php" class="navItem">Inscription</a>
									</li>
							    <?php
				        			}
				    			?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!-- --------- FIN HEADER---------- -->
		<main>
			<h1 class="titreInscription col-10">Inscription</h1>
			<div class="divFormulaireInscriptionDejaCompte col-10">
				<div class="divFormulaireInscription col-6">

					<!-- --------- PHP ERREUR--------- -->
					<?php 
                        if(@$_GET['erreurchampsvide']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurchampsvide'] ?></div> <br>
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['erreurnomtropcaractere']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurnomtropcaractere'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['erreurprenomtropcaractere']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurprenomtropcaractere'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                     <?php 
                        if(@$_GET['erreurmailivalide']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurmailivalide'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                     <?php 
                        if(@$_GET['erreurnumeroteltropcaractere']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurnumeroteltropcaractere'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['erreurmotdepassetropcaractere']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurmotdepassetropcaractere'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['erreurmotdepassedifferent']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurmotdepassedifferent'] ?></div> <br>                              
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['erreuremailexist']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreuremailexist'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['erreurnumerotelchiffre']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurnumerotelchiffre'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['erreurnumerotelformat']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurnumerotelformat'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['erreurmotdepassecourt']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3 col-9"><?php echo $_GET['erreurmotdepassecourt'] ?></div> <br>                               
                    <?php
                        }
                    ?>

                    <!-- FIN PHP ERREUR -->

					<form method="post" action="assets/php/processInscription.php">
						<div class="divCivilite">
							<p>Civilité</p>
							<select class="form-control col-2" name="civilite">
								<option>Mr</option>
							  	<option>Mme</option>
							</select>
						</div>
						<div class="divNomPrenom">
							<div class="divNom">
								<p>Nom</p>
								<input type="text" name="nom" placeholder="Nom" required>
							</div>
							<div class="divPrenom">
								<p>Prenom</p>
								<input type="text" name="prenom" placeholder="Prenom" required>
							</div>
						</div>
						<div class="divNumeroEmail">
							<div class="divNumero">
								<p>Numéro Téléphone</p>
								<input type="text" name="numerotel" placeholder="Numéro Téléphone" required>
							</div>
							<div class="divEmail">
								<p>Adresse Email</p>
								<input type="text" name="email" placeholder="Adresse Email" required>
							</div>
						</div>
						<div class="divMdpConfirmerMdp">
							<div class="divMdp">
								<p>Mot de passe</p>
								<input type="password" name="motdepasse" placeholder="Mot de passe" required>
							</div>
							<div class="confirmerMdp">
								<p>Confirmer mot de passe</p>
								<input type="password" name="motdepasseconfirmer" placeholder="Confirmer mot de passe" required>
							</div>
						</div>
						<input type="submit" class="btn btnInsctiption" name="inscription" value="Inscription">
					</form>
				</div>
				<div class="divDejaCompte col-6">
			 		<p>Déjà inscrit? Connectez-vous !</p>
					<input type="button" class="btn" value="Connexion" onclick="window.location.href='signIn.php'"/>
				</div>
			</div>
		</main>
		<!-- --------- FIN MAIN---------- -->
		<footer>
			<div class="divTxtBoutonContact">
				<h3>Une Question? Contactez-Nous !</h3>
				<input type="button" class="btn btnContact" value="Contact" onclick="window.location.href='contact.php'"/>
			</div>

			<div class="divFooter">
				<p>2019 HOTEL DMD | HOTEL DMD A COURBEVOIE | <a href="mentionsLegales.php" class="mentionsLegales">MENTIONS LEGALES</a> | SITE REALISE PAR KARIM DAMAD</p>
			</div>
		</footer>

		<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>	