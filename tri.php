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

		$sql = "SELECT * FROM GarageRoy ORDER BY $tri";
		$resultat = mysqli_query($connexion, $sql);

		// Affichage des résultats
		if (mysqli_num_rows($resultat) > 0) {
			echo "<table>";
			echo "<tr><th>Nom</th><th>Prénom</th><th>Âge</th></tr>";

			while ($ligne = mysqli_fetch_assoc($resultat)) {
				echo "<tr><td>" . $ligne["carburant"] . "</td><td>" . $ligne["etat"] . "</td><td>" . $ligne["marque"] . "</td></tr>". $ligne["typevehicule"] . "</td></tr>" . $ligne["vehicule"] . "</td></tr>";
			}

			echo "</table>";
		} else {
			echo "Aucun résultat trouvé.";
		}

		// Fermeture de la connexion à la base de données
		mysqli_close($connexion);
	?>