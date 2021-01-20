<!DOCTYPE html>
<html lang="fr">
	<?php  
		include 'assets/php/processMonCompte.php';
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
		<title>Hôtel DMD - Accueil</title>
	</head>

	<!-- ------------------------------- FIN HEAD ------------------------------- -->

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
			<!-- Carrousel -->
			<div class="bd-example">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="assets/img/chambreTriple.jpg" class="d-block w-100 imgChambreSimple" alt="Chambre Simple">
								<div class="carousel-caption d-none d-md-block col-6 m-auto">
								  <h3>Hôtel DMD</h3>
								  <p>Situé en plein centre-ville de Courbevoie</p>
								  <p>Venez passer une nuit inoubliable dans l'une de nos 13 chambres</p>
								</div>
							</div>
						<div class="carousel-item">
							<img src="assets/img/chambreDouble.jpg" class="d-block w-100 imgChambreDouble" alt="Chambre Double">
							<div class="carousel-caption d-none d-md-block col-6 m-auto">
						  		<h3>3 types de chambre disponible</h3>
						  		<p>Simple - Double - Triple</p>
						  		<p>Choisissez la chambre qui vous conviendra au mieux</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="assets/img/chambreSimple.jpg" class="d-block w-100 imgChambreTriple" alt="Chambre Triple">
							<div class="carousel-caption d-none d-md-block col-6 m-auto">
						  		<h3>Paiement sur place</h3>
						  		<p>Reservation en ligne</p>
						  		<p>Créer un compte client et reserevez dès maintenant!</p>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

			<!-- Bouton RESERVER -->
			<div class="divBtnReserverIndex col-12">
				<?php 
			        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'])
			        {
			    ?>
			    	<input type="button" value="Reserver" class="btn btnReserverIndex" onclick="window.location.href='reservation.php?userid=<?php echo $_SESSION['id'] ?>'"/>      
			    <?php
			        }else{
			    ?>
			    	<input type="button" value="Reserver" class="btn btnReserverIndex" onclick="window.location.href='reservation.php'"/>
			    <?php
			        }
			    ?>
			</div>

			<!-- Presentation Hôtel -->
			<div class="divTxtPresentationImgHotel col-11 d-flex">
				<div class="divTxtPresentation col-6">
					<h2 align="center">Hôtel DMD</h2>
					<br>
					<p>Situé en plein coeur de Courbevoie, l'Hôtel DMD vous propose de passer une nuit agréable dans l'une de nos chambres préparé avec soin.</p>
					<br>
					<p>Notre bâtiment de 2 étages propose 12 chambres très spacieuses et confortable, un accès Wi-Fi gratuit, un parking 50 places et un ascenseur adapté aux personnes handicapées.</p>
					<br>
					<p> L'hôtel dispose également d’un élégant restaurant raffiné avec terrasse ainsi qu’un bar chic, ou vous pourrez savourer un cocktail rafraichissant entre amis ou en famille, dans une ambiance musicale appropriée.</p>
					<br>
					<p>Notre équipe de professionnelle bilingue se fera le plaisir de vous accueillir à n'importe quelle période de l'année.</p>
				</div>
				<div class="divImgHotel col-6">
					<img src="assets/img/hotelFace.jpg" class="d-block w-100" alt="Entrée Hôtel">
				</div>
			</div>

			<!-- Les + de l'hotel -->
			<div class="divIcone col-11">
				<div class="divIcone1">
					<div class="col-4">
						<img class="icone" src="assets/img/iconeWifi.png" alt="Icone Wifi">
						<p>Wi-Fi</p>
					</div>
					<div class="col-4">
						<img class="icone" src="assets/img/iconeParking.png" alt="Icone Parking">
						<p>Parking Gratuit</p>
					</div>
					<div class="col-4">
						<img class="icone" src="assets/img/iconeRoomService.png" alt="Icone Room Service">
						<p>Room Service</p>
					</div>
				</div>
				<div class="divIcone2">
					<div class="col-4">
						<img class="icone" src="assets/img/iconeBilingue.png" alt="Icone Bilingue">
						<p>Personnel Bilingue</p>
					</div>
					<div class="col-4">
						<img class="icone" src="assets/img/iconeAscenseur.png" alt="Icone Ascenseur">
						<p>Ascenseur</p>
					</div>
					<div class="col-4">
						<img class="icone" src="assets/img/iconeCentreVille.png" alt="Icone Centre Ville">
						<p>En Plein Centre-Ville</p>
					</div>
				</div>
			</div>
		</main>
		<!-- --------- FIN MAIN ---------- -->
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