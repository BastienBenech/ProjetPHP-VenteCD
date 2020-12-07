<!DOCTYPE HTML>
<html lang="fr">
    <HEAD>
        <link rel="stylesheet" type="text/css" href="mystyle.css" />
        <meta charset="utf-8">
        <title>Projet PHP</title>
    </HEAD>
    <BODY>
		<?php
			$cd = explode(';', $_POST['cdChoisi']);

			$titre = $cd[0];
			$auteur = $cd[1];
			$genre = $cd[2];
			$prix = $cd[3];
			$pochette = $cd[4];

			echo
			"<div class='divTitre'>",
				"<img id='imgBandeau' src='libImages/logo iut 2018.jpg'>",
				"<div id='divTitrePage'>",
					"<h1>Boutique de CDs</h1>",
					"<h2>$titre de $auteur :</h2>",
				"</div>",
				"<a id='connexion'>Se Connecter</a>",
			"</div>",

			"<div class='divDetailCD'>",
				"<div class='divImgDetailCD'>",
					"<img class='imgDetailCD' src='libImages/$pochette'>",
				"</div>",
				"<div class='divInfoDetailCD'>",
					"<p class='titreDetailCD'><strong>Titre :</strong> $titre</p>",
					"<p class='auteurDetailCD'><strong>Auteur :</strong> $auteur</p>",
					"<p class='genreDetailCD'><strong>Genre :</strong> $genre</p>",
					"<div class='divPrixDetailCD'>",
						"<p class='prixDetailCD'>$prix €</p>",
						"<form action='acheterCD.php' method='POST'>",
							"<input type='submit' value='Ajouter au panier' class='btnAcheterCD'/>",
						"</form>",
					"</div>",
				"</div>",
			"</div>";
		?>
	</BODY>
</html>
</HTML>