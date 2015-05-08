<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Mes Annonces</title>
	<meta charset = "utf-8"/>
</head>
<body>
	<?php 
	if(isset($_SESSION['pseudo']))
	{
		include("../invariants/header.php"); ?>	
		<div class="mes_annonces">
			<article class="ventes_en_cours">
				<strong><h1>Ventes en cours</h1></strong>
				<?php
				try
				{
				$bdd = new PDO('mysql:host=localhost;dbname=I_NEED_EAT; charset=utf8','root','');
				}
				catch (Exception $e)
				{
					die('erreur : '.$e->getmessage());
				}
				$reponse = $bdd->prepare('SELECT * FROM annonces WHERE Auteur = ?');
				$reponse -> execute(array($_SESSION['pseudo']));
				while ($donnees = $reponse->fetch())
				{
					?>
					<p>
						<strong>titre</strong> : <?php echo $donnees['Nom']; ?> <br/>
					</p>
					<p>
						Nombre de membre suivant la vente : <?php echo $donnees['Nbr_visite']; ?>
					</p>
					<p>
						<strong>prix</strong> : <?php echo $donnees['Prix']; ?>
						<strong>Quantité restante</strong> : <?php echo $donnees['Quantite']; ?>
						Date de mise en vente : <?php echo $donnees['Date']; ?>
					</p>
					<form action="../suppression/supprimer.php" method="post">
						<input type="submit" value="supprimer"/>
					</form>
					<?php
				}
				?>
				</article>
	<?php
	}
else
{
	echo 'Vous devez être inscrit pour accéder à cette page';
	include("../formulaires/inscription.php");
}
	?>	
</body>
</html>
