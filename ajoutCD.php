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
				<h2>Ajout du CD :</h2>
			</div>
            <p id="connexion">Se Connecter</p>
		</div>
		
		<div id='divFormAjoutCD'>
			<FORM ENCTYPE='multipart/form-data' ACTION='uploadAjoutCD.php' METHOD='POST'>
				<div class='divChamps'>
					<label for='champTitre'>Titre : </label>
					<input type='text' name='champTitre'/>
				</div>

				<div class='divChamps'>
					<label for='champAuteur'>Auteur : </label>
					<input type='text' name='champAuteur'/>
				</div>

				<div class='divChamps'>
					<label for='champAuteur'>Genre : </label>
					<input type='text' name='champAuteur'/>
				</div>

				<div class='divChamps'>
					<label for='champAuteur'>Prix : </label>
					<input type='number' name='champAuteur'/>
				</div>

				<div class='divChamps'>
					<label for='champPochette'>Pochette : </label>
					<input type='file' name='champPochette' value='Pochette : '/>
				</div>

				<div class='divChamps'>
					<input type='submit' name='champBtnValider' value='Enregistrer'/>
				</div>
			</FORM>
		</div>
		
	</BODY>
</html>
</HTML>