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
            <div id="divTitrePage">
				<h1>Boutique de CDs</h1>
				<h2>Liste des albums :</h2>
			</div>
            <p id="connexion">Se Connecter</p>
		</div>
		
		<div class="divAjoutCD">
			<a id="btnAjoutCD" href="ajoutCD.php">Enregistrer un nouveau CD</a>
		</div>

		<?php
			$lesAlbums = simplexml_load_file('donneesCD.xml');

			foreach($lesAlbums->album as $cd)
			{
				$titre = $cd->titre;
				$auteur = $cd->auteur;
				$genre = $cd->genre;
				$prix = $cd->prix;
				$pochette = $cd->pochette;

				echo
				"<div class='divListeCD'>",
					"<div class='divOffreCD'>",
						"<div class='divImgOffreCD'>",
							"<img class='imgOffreCD' src='libImages/$pochette'>",
						"</div>",
						"<div class='divInfoOffreCD'>",
							"<p class='titreOffreCD'><strong>Titre :</strong> $titre</p>",
							"<p class='auteurOffreCD'><strong>Auteur :</strong> $auteur</p>",
							"<p class='genreOffreCD'><strong>Genre :</strong> $genre</p>",
							"<div class='divPrixOffreCD'>",
								"<p class='prixOffreCD'>$prix €</p>",
								"<form action='detailCD.php' method='POST'>",
									"<input type='submit' value='Détail' class='btnFicheCD'/>",
									"<input type='hidden' value='$titre;$auteur;$genre;$prix;$pochette' name='cdChoisi'/>",
								"</form>",
							"</div>",
						"</div>",
					"</div>",
				"</div>";
			}
		?>
	</BODY>
</html>
</HTML>