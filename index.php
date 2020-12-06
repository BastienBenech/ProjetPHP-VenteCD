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
            <p id="connexion">Se connecter</p>
        </div>

		<?php
			$lesAlbums = simplexml_load_file('donneesCD.xml');

			foreach($lesAlbums->album as $cd)
			{
				echo
				"<div class='divListeCD'>",
					"<div class='divOffreCD'>",
						"<div class='divImgOffreCD'>",
							"<img class='imgOffreCD' src='libImages/$cd->pochette'>",
						"</div>",
						"<div class='divInfoOffreCD'>",
							"<p class='titreOffreCD'><strong>Titre :</strong> $cd->titre</p>",
							"<p class='auteurOffreCD'><strong>Auteur :</strong> $cd->auteur</p>",
							"<p class='genreOffreCD'><strong>Genre :</strong> $cd->genre</p>",
							"<div class='divPrixOffreCD'>",
								"<p class='prixOffreCD'>$cd->prix €</p>",
								"<form action='ficheCD.php' method='GET'>",
									"<input type='submit' value='Détail' class='btnFicheCD'>",
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