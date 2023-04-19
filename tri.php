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

		$sql = "SELECT * FROM carburant ORDER BY $tri";
		$sql2 = "SELECT * FROM etat ORDER BY $tri";
		$sql3 = "SELECT * FROM marque ORDER BY $tri";
		$sql4 = "SELECT * FROM typevehicule ORDER BY $tri";
		$resultat = mysqli_query($connexion, $sql);
		$resultat2 = mysqli_query($connexion, $sql2);
		$resultat3 = mysqli_query($connexion, $sql3);
		$resultat4 = mysqli_query($connexion, $sql4);

		// Affichage des résultats
		if (mysqli_num_rows($resultat) > 0) {
			echo "<table>";
			echo "<tr><th>carburant</th></tr>";

			while ($ligne = mysqli_fetch_assoc($resultat)) {
				echo "<tr><td>" . $ligne["carburant"];
			}
		if (mysqli_num_rows($resultat2) > 0) {
			echo "</table>";
			echo "<table>";
			echo "<tr><th>etat</th></tr>";

			while ($ligne2 = mysqli_fetch_assoc($resultat2)) {
				echo "<tr><td>" . $ligne2["etat"];
			}
		if (mysqli_num_rows($resultat3) > 0) {
			echo "</table>";
			echo "<table>";
			echo "<tr><th>marque</th></tr>";
	
			while ($ligne3 = mysqli_fetch_assoc($resultat3)) {
				echo "<tr><td>" . $ligne3["carburant"];
			}
		if (mysqli_num_rows($resultat4) > 0) {
			echo "</table>";
			echo "<table>";
			echo "<tr><th>typevehicule</th></tr>";
		
			while ($ligne4 = mysqli_fetch_assoc($resultat4)) {
				echo "<tr><td>" . $ligne4["carburant"];
			}
		}
			echo "</table>";
		} else {
			echo "Aucun résultat trouvé.";
		}

		// Fermeture de la connexion à la base de données
		mysqli_close($connexion);
	?>

	//"</td><td>" . $ligne["etat"] . "</td><td>" . $ligne["marque"] . "</td></tr>". $ligne["typevehicule"] . "</td></tr>" . $ligne["vehicule"] . "</td></tr>";