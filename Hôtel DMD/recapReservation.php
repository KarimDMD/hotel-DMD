<!DOCTYPE html>
<html lang="fr">
	<?php  
		include 'assets/php/processMonCompte.php';
		include 'assets/php/processReservation.php';
	?>
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
		<title>Hôtel DMD - Récapitulatif</title>
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
			<h1 class="titreRecap col-10">Récapitulatif</h1>
			<!-- verifie que le userid et la session corresponde -->
			<?php 
		        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'] AND $_SESSION['id'] == $_GET["userid"])
		        {
		    ?>
				<form method="post">
					<div class="divInfoClient col-10">
						<h3>Info Client</h3>
						<div class="divInfoClientCivilite col-4">
							<p class="col-4"><?php echo $userinfo['civilite'] ?></p>
						</div>
						<div class="divInfoClientNomPrenom col-4">
							<p class="col-4"><?php echo $userinfo['nom'] ?></p>
							<p class="col-4"><?php echo $userinfo['prenom'] ?></p>
						</div>
						<div class="divInfoClientNumTelEmail col-4">
							<p class="col-6"><?php echo $userinfo['numerotel'] ?></p>
							<p class="col-6"><?php echo $userinfo['email'] ?></p>
						</div>
						<div class="divBtnModifierInfoClient col-10">
							<input type="button" name="modifierProfil" class="btn" value="Mofifier" onclick="window.location.href='edition.php?userid=<?php echo $_SESSION['id'] ?>'">
						</div>
					</div>
					<div class="divInfoReservation col-10">
						<h3>Info Reservation</h3>
						<div class="divInfoReservationDateArriveDepart col-4">
							<div class="col-6">
								<p class="bold">Date arrivée</p>
								<p><?php echo $_SESSION["recapdateArrive"] ?></p>
							</div>
							<div class="col-6">
								<p class="bold">Date depart</p>
								<p><?php echo $_SESSION["recapdateDepart"] ?></p>
							</div>
						</div>
						<div class="divInfoReservationTypeChambreNbrPersonne col-4">
							<div class="col-6">
								<p class="bold">Type chambre</p>
								<p><?php echo $_SESSION["recaptypeChambre"] ?></p>
							</div>
							<div class="col-6">
								<p class="bold">Nbr personne</p>
								<p><?php echo $_SESSION["recapnbrPersonne"] ?></p>
							</div>
						</div>
						<div class="divInfoReservationPetitDej col-4">
							<p class="col-6 bold">Petit dej</p>
							<p class="col-6"><?php echo $_SESSION["recappetitDej"] ?></p>
						</div> <br>
						<div class="divInfoReservationPrix col-4">
							<p class="col-6 bold">Prix</p>
							<p class="col-6"><?php echo $_SESSION["recapprixFinal"] ?></p>
						</div> <br>
						<div class="divBtnModifierInfoReservation col-10">
							<input type="button" name="modifierReservation" class="btn" value="Mofifier" onclick="window.location.href='reservation.php?userid=<?php echo $_SESSION['id'] ?>'">
						</div>
					</div>
					<div class="divBtnReserverAnnuler col-10">
						<button type="submit" class="btn" name="btnReserver">Reserver</button>
						<input type="button" class="btn" value="Annuler" onclick="window.location.href='index.php?userid=<?php echo $_SESSION['id'] ?>'"/>
					</div>
				</form>
			<?php
		        }
		    ?>
		</main>
		<!-- --------- FIN MAIN---------- -->
		<footer>
			<div class="divTxtBoutonContact">
				<h3>Une Question? Contactez-Nous !</h3>
				<?php 
			        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
			        {
			    ?>
			   		 <input type="button" class="btn btnContact" value="Contact" onclick="window.location.href='contact.php?userid=<?php echo $_SESSION['id'] ?>'"/>        
			    <?php
			        }else{
			    ?>
			        <input type="button" class="btnContact" value="Contact" onclick="window.location.href='contact.php'"/>
			    <?php
			        }
			    ?>
			</div>

			<div class="divFooter">
				<p>2019 HOTEL DMD | HOTEL DMD A COURBEVOIE | 
					<?php 
				        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
				        {
				    ?>
				   		 <a href="mentionsLegales.php?userid=<?php echo $_SESSION['id'] ?>" class="mentionsLegales">MENTIONS LEGALES</a>        
				    <?php
				        }else{
				    ?>
				        <a href="mentionsLegales.php" class="mentionsLegales">MENTIONS LEGALES</a>
				    <?php
				        }
				    ?>

					 | SITE REALISE PAR KARIM DAMAD</p>
			</div>
		</footer>

		<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>	