<!DOCTYPE html>
<html>
    <head>
        <title>GarageRoy - Catalogue</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    </head>
    <body>
        <header>
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Accueil.html"></a><img src="Logo2.png">           <form action="#" method="get">
                <input type="text" placeholder="Rechercher sur GarageRoy"> <!--Barre de recherche a rendre fonctionnel-->
            </form>
        </h1>
        </header>
        <header>
            <H3 class="barre">&nbsp;</H3>
            <H3><center><a class="link" href="Accueil.html">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Catalogue.html">Catalogue</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Actu.html">Actualités</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Contact.html">Contact</a></center></H3>            <H3 class="orange"><center>‾‾‾‾‾‾‾‾‾&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></H3>
        </header>
        <h1>Résultats de la recherche</h1>

	<form action="tri.php" method="post">
		<label for="tri">Trier par:</label>
		<select name="tri" id="tri">
			<option value="nom">Nom</option>
			<option value="prenom">Prénom</option>
			<option value="age">Âge</option>
		</select>
		<input type="submit" value="Trier">
	</form>

	<?php
		// Connexion à la base de données
		$serveur = "localhost";
		$utilisateur = "root";
		$mdp = "";
		$bdd = "garageroy";

		$connexion = mysqli_connect($serveur, $utilisateur, $mdp, $bdd);

		// Vérification de la connexion
		if (!$connexion) {
			die("Connexion échouée: " . mysqli_connect_error());
		}

		// Récupération des données de la base de données
		$tri = $_POST['tri'];

		$sql = "SELECT * FROM ma_table ORDER BY $tri";
		$resultat = mysqli_query($connexion, $sql);

		// Affichage des résultats
		if (mysqli_num_rows($resultat) > 0) {
			echo "<table>";
			echo "<tr><th>Nom</th><th>Prénom</th><th>Âge</th></tr>";

			while ($ligne = mysqli_fetch_assoc($resultat)) {
				echo "<tr><td>" . $ligne["nom"] . "</td><td>" . $ligne["prenom"] . "</td><td>" . $ligne["age"] . "</td></tr>";
			}

			echo "</table>";
		} else {
			echo "Aucun résultat trouvé.";
		}

		// Fermeture de la connexion à la base de données
		mysqli_close($connexion);
	?>
    </body>
</html>