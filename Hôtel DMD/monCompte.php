<!DOCTYPE html>
<html lang="fr">
	<?php  
		include 'assets/php/processMonCompte.php';
		include 'assets/php/processEdition.php';
	?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Boostrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- JS -->
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
		<!-- FONT Roboto -->
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<title>Hôtel DMD - Mon Compte</title>
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
			<h1 class="titreMonCompte col-10">Mon Compte</h1>
			<!-- confirmation edition -->
			<?php if (isset($_GET["confirmation"])) {
	        ?>	
	        	<div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $_GET["confirmation"] ?></div> <br>
	        <?php
	        	} 
	        ?>

	        <!-- erreur mot de passe saisie pour suppression -->
			<?php 
                if(@$_GET['erreurmotdepasse']==true)
                {
            ?>
                <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $_GET['erreurmotdepasse'] ?></div> 
                <br>                   
            <?php
                }
            ?>

            <!-- champs mot de passe incomplet pour suppression -->
			<?php 
                if(@$_GET['champsincomplet']==true)
                {
            ?>
                <div class="alert-light text-danger text-center py-3 col-10 m-auto"><?php echo $_GET['champsincomplet'] ?></div> 
                <br>                   
            <?php
                }
            ?>

			<div class="divInfoClientMonCompte col-10">
				<h3 class="titreInfoClient">Info Client</h3>
				<!-- verification bon user connecté -->
				<?php 
			        if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'] AND $_SESSION['id'] == $_GET["userid"])
			        {
			    ?>
			    	<br>
			    	<!-- affichage des données de l'utilisateur -->
			        <p> <?php echo $userinfo['civilite'].' '.$userinfo['prenom'].' '.$userinfo['nom']?> </p> 
			        <p>Email: <?php echo $userinfo['email']?></p>
			        <p>Numero téléphone:  <?php echo $userinfo['numerotel']?></p>
			        <br>

			        <input type="button" name="editerprofil" class="btn" value="Editer" onclick="window.location.href='edition.php?userid=<?php echo $_SESSION['id'] ?>'">
			        <input type="button" name="signout" class="btn" value="Se déconnecter" onclick="window.location.href='assets/php/processSignOut.php'">                                 
			    <?php
			        }
			    ?>
			</div>

			<h3 class="titreHistoriqueReservation col-10">Historique des reservations</h3>
			<div class="divHistoriqueReservation col-10 table-responsive">
				<table class="table">
					<thead class="tableHead">
						<tr>
							<th scope="col">Numéro Réservation</th>
							<th scope="col">Date arrivée</th>
							<th scope="col">Date départ</th>
							<th scope="col">Type chambre</th>
							<th scope="col">Numero chambre</th>
							<th scope="col">Nombre personne</th>
							<th scope="col">Petit Dejeuner</th>
							<th scope="col">Prix</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							for ($i=0; $i < $nbrLigneReservation; $i++) {
       		 					$reservationinfo = $reqreservation->fetch();
						?> 
							<tr>
								<th scope="col"><?php echo $reservationinfo['idreservation']; ?></th>
								<th scope="col"><?php echo $reservationinfo['datearrive']; ?></th>
								<th scope="col"><?php echo $reservationinfo['datedepart']; ?></th>
								<th scope="col"><?php echo $reservationinfo['typechambre']; ?></th>
								<th scope="col"><?php echo $reservationinfo['idchambre']; ?></th>
								<th scope="col"><?php echo $reservationinfo['nbrpersonne']; ?></th>
								<th scope="col"><?php echo $reservationinfo['petitdej']; ?></th>
								<th scope="col"><?php echo $reservationinfo['prix']; ?></th>
							</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>

			<?php 
				// affichage option supprimer si le bon user est connecté
			    if(isset($_SESSION['id']) AND $userinfo['iduser'] == $_SESSION['id'] AND $_SESSION['id'] == $_GET["userid"])
			        {
			    ?>
			    	<form method="post" action="" class="optionSupprimerCompte">
						<div class="divSupprimerCompte col-10 m-auto">
							<script>
							// On attend que la page soit chargée 
							jQuery(document).ready(function(){
								// On cache la zone de texte
							   	jQuery('#toggle').hide();
							   	// toggle() lorsque le lien avec l'ID #toggler est cliqué
							   	jQuery('a#toggler').click(function(){
							    	jQuery('#toggle').toggle(400);
							      	return false;
							   	});
							});
							/* ]]> */ 
							</script>

							<a href="#" id="toggler">Supprimer son compte</a>
							<div id="toggle">
								<div class="divMotdepasseActuel">
									<p>Mot de passe actuel</p>
									<input type="password" name="motdepasseActuel"><br><br>
								</div>
								<input type="submit" name="supprimer" class="btn" value="Supprimer mon compte">
							</div>
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