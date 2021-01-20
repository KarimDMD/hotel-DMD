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
		<title>Hôtel DMD - Reservation</title>
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
			<?php 
		        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
		        {
		    ?>
		   		<!-- RESERVATION -->
		   		<h1 class="titreReservation col-10">Reservation</h1>

		   		<!-- --------- PHP ERREUR--------- -->
				<?php 
                    if(isset($erreurTypeChambre)){
                ?>
                   <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $erreurTypeChambre ?></div>
                <?php
                    }
                ?>

                <?php 
                    if(isset($erreurNbrPersonne)){
                ?>
                   <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $erreurNbrPersonne ?></div>
                <?php
                    }
                ?>

                <?php 
                    if(isset($erreur2PersonnesMax)){
                ?>
                   <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $erreur2PersonnesMax ?></div>
                <?php
                    }
                ?>

                <?php 
                    if(isset($erreur3PersonnesMax)){
                ?>
                   <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $erreur3PersonnesMax ?></div>
                <?php
                    }
                ?>

                <?php 
                    if(isset($erreur3PersonnesMin)){
                ?>
                   <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $erreur3PersonnesMin ?></div>
                <?php
                    }
                ?>

                <?php 
                    if(isset($erreurDateArriveInferieur)){
                ?>
                   <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $erreurDateArriveInferieur ?></div>
                <?php
                    }
                ?>

                <?php 
                    if(isset($erreurDateArriveSuperieur)){
                ?>
                   <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $erreurDateArriveSuperieur ?></div>
                <?php
                    }
                ?>
                <!-- FIN PHP ERREUR -->
                <br>

				<div class="divRappelPaiement col-10">
					<p><span class="bold">RAPPEL:</span> LE PAIEMENT SE FAIT SUR PLACE</p>
				</div>
				<div class="divFormulaireReservationRecapActualise col-10">					
					<form method="post" class="col-6">
						<div class="divDateArriveDepart">
							<div class="divDateArrive col-6">
								<p>Date d'arrivée</p>
								<input type="date" name="dateArrive" required>
							</div>
							<div class="divDateDepart col-6">
								<p>Date de départ</p>
								<input type="date" name="dateDepart" required>
							</div>
						</div>
						<div class="divTypeChambre col-12">
							<p>Type de chambre</p>
							<select name="typeChambre">
								<option value="null">-</option>
								<option value="Simple">Chambre Simple</option>
								<option value="Double">Chambre Double</option>
								<option value="Triple">Chambre Triple</option>
							</select>
						</div>
						<div class="divNbrPersonne col-12">
							<p>Nombre de personne</p>
							<select name="nbrPersonne">
								<option value="null">-</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<div class="divPetitDej col-12">
							<p>Petit Déjeuner</p>
							<input type="checkbox" name="petitDej">
						</div>
						<div class="divBtnValider">
							<input type="submit" name="btnValider" value="Valider" class="btn">
						</div> 
					</form>	
				</div>      
		    <?php
		        }else{
		    ?>
		        <!-- DOIT SE CONNECTER -->
		        <div class="divSeCoOuInscri col-10">
					<h3>Afin de réserver une chambre, un compte client est requis</h3>
					<h3>Veuillez-vous connecter ou vous inscrire</h3>
					<div class="divBtnSeCoOuInscri">
						<div class="col-6">
							<p>Se connecter</p>
							<input type="button" class="btn" value="Connexion" onclick="window.location.href='signIn.php'"/>
						</div>
						<div class="col-6">
							<p>S'inscrire</p>
							<input type="button" class="btn" value="Inscription" onclick="window.location.href='signUp.php'"/>
						</div>
					</div>
				</div>
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
			        <input type="button" class="btn btnContact" value="Contact" onclick="window.location.href='contact.php'"/>
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