<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="StructureStyle.css">
		<title> I NEED EAT </title>

	</head>

	<body>
		<header id="Header">

						<img id="Logo" src="Logo.jpg"> 

			<div id="Recherche">

					<h2> Vente et échanges de fruits et légumes fraits </h2>
						<label>Recherche :</label> <input type="search" name="Recherche" placeholder="Fruits,Légumes..."/>
						<input type="submit" value="Valider">

			</div>

			<section id="Connexion">
				<div id="Identifiant">

				<form method="post" action="#.php">
					<p>
						<label for="ID">Votre email:</label> 
						<input type="email" name="ID" id="ID" placeholder="exemple@ex.com" size="15"/>
					<br>
					<br>
						<label for="MDP">Mot de passe:</label> 
						<input type="password" name="MDP" id="MDP" placeholder="xxxxxxxx"  size="15"/>
					<br>
						<a href="formulaireMDP.php"> Mot de pass oublié?				</a>
					</p>
				</form>	
				</div>	
				

				<div id="Bouton">

						<a href="connect.php" class="myButton"> Connectez-vous </a>
						
					<br>
						<a href="formulaire.php"> Pas encore Inscrit?					</a>
				</div>
			</section>
			<br>
			<br>
			<nav id="navigation">
				<table>
					<tr>
						<td> <a href="Offres.html"> Offres 									</a>	</td>
						<td> <a href="Demandes.html"> Demandes 								</a>	</td>
						<td> <a href="PoserAnnonces.html"> Poser Annonce 					</a>	</td>
						<td> <a href="MesAnnonces.html"> Mes Annonces 						</a>	</td>
					</tr>
				</table>				
			</nav>
		</header>


		<footer>
	
	 		<div id="foot">
			<span id="Association">

				<h3> L'association </h3>

				<p id="Qui"> <a href="Qui.html">	Qui sommes nous? 					</a>	</p>
				<p id="NoA"> <a href="NosActions.html">	Nos actions						</a>	</P>
				<p id="SdA"> <a href="Sinvestir.html"> S'investir dans l'association 	</a>	</p>

			</span>

			<span id="APropos">

				<h3> A propos </h3>	

				<p id="CGU"> <a href="CGU.html"> CGU 									</a>	</p>
				<p id="Confident"><a href="Confidentialité.html">	Confidentialité		</a>	</p>
				<p id="MentionL"> <a href="MentionsLégales.html"> Mentions légales 	 	</a>	</p>

			</span>

			<span id="Aides">

				<h3> Aides et services </h3>	

				<p id="Aide"> <a href="..APP_informatique/invariants/pages_du_footer/aide_et_service.php"> Aide et service 								</a>	</p>
				<p id="SignA"><a href="..APP_informatique/invariants/pages_du_footer/signaler_un_abus.php">	Signaler un abus			</a>	</p>
				<p id="Contact"><a href="..APP_informatique/invariants/pages_du_footer/nous_contacter.php"> Nous contacter 	 		</a>	</p>

			</span>
		</div>
	</footer>
	</body>







</html>