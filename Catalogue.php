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
            <h1><a href="Accueil.html"></a><img class="logobar" src="Logo2.png">           <form action="#" method="get">
                <input type="text" placeholder="Rechercher sur GarageRoy"> <!--Barre de recherche a rendre fonctionnel-->
            </form>
        </h1>
        </header>
        <header>
            <H3 class="barre">&nbsp;</H3>
            <H3><center><a class="link" href="Accueil.html">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Catalogue.php">Catalogue</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Actu.html">Actualités</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="link" href="Contact.php">Contact</a></center></H3>            <H3 class="orange"><center>‾‾‾‾‾‾‾‾‾&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center></H3>
        </header>
        <h1>Résultats de la recherche</h1>

	<form action="tri.php" method="post">
		<label for="tri">Trier par:</label>
		<select name="tri" id="tri">
			<option value="carburant">carburant</option>
			<option value="etat">Etat</option>
			<option value="typevehicule">Type de véhicule</option>
            <option value="utilisateur">Utilisateur</option>
            <option value="vehicule">Vehicule</option>
		</select>
		<input type="submit" value="Trier">
	</form>

	<?php
		// Connexion à la base de données
		$serveur = "localhost";
		$utilisateur = "root";
		$mdp = "";
		$bdd = "GarageRoy";

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
				echo "<tr><td>" . $ligne["carburant"] . "</td><td>" . $ligne["etat"] . "</td><td>" . $ligne["marque"] . "</td></tr>". $ligne["typevehicule"] . 
                "</td></tr>". $ligne["utilisateur"] . "</td></tr>" . $ligne["vehicule"] . "</td></tr>";
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