<!DOCTYPE HTML>
<html lang="fr">
    <HEAD>
        <link rel="stylesheet" type="text/css" href="mystyle.css" />
        <meta charset="utf-8">
        <title>Projet PHP</title>
    </HEAD>
    <BODY>

        <div class="divTitre">
            <img id="imgBandeau" src="libImages/logo iut 2018.jpg">
            <h1>Boutique de CDs</h1>
            <p>par Bastien Benech</p>
        </div>

        <div class="divListeCD">
			<div class="divOffreCD">
				<div class="divImgOffreCD">
					<img class="imgOffreCD" src="libImages/JVLIVS.jpg">
				</div>
				<div class="divInfoOffreCD">
					<p class="titreOffreCD"><strong>Titre :</strong> JVLIVS</p>
					<p class="auteurOffreCD"><strong>Auteur :</strong> SCH</p>
					<p class="genreOffreCD"><strong>Genre :</strong> RAP / Hip-Hop français</p>
					<div class="divPrixOffreCD">
						<p class="prixOffreCD">18,00 €</p>
						<form action="ficheCD.php" method="GET">
							<input type="submit" value="Détail" class="btnFicheCD">
						</form>
					</div>
				</div>
			</div>
		</div>
	</BODY>
</html>
</HTML>