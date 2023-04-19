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

		<form>
  <label for="marque">Marque :</label>
  <input type="text" id="marque" name="marque"><br><br>
    <option value="neuf">Renault</option>
    <option value="occasion">BMW</option>

  <label for="modele">Modèle :</label>
  <input type="text" id="modele" name="modele"><br><br>

  <label for="cv">CV :</label>
  <input type="number" id="cv" name="cv"><br><br>

  <label for="prix_max">Prix maximum :</label>
  <input type="number" id="prix_max" name="prix_max"><br><br>

  <label for="prix_min">Prix minimum :</label>
  <input type="number" id="prix_min" name="prix_min"><br><br>

  <label for="etat">État :</label>
  <select id="etat" name="etat">
    <option value="neuf">Neuf</option>
    <option value="occasion">Occasion</option>
  </select><br><br>

  <label for="carburant">Carburant :</label>
  <select id="carburant" name="carburant">
    <option value="essence">Essence</option>
    <option value="diesel">Diesel</option>
    <option value="hybride">Hybride</option>
    <option value="electrique">Électrique</option>
  </select><br><br>

  <label for="kilometrage">Kilométrage :</label>
  <input type="number" id="kilometrage" name="kilometrage"><br><br>

  <label for="annee">Année :</label>
  <input type="number" id="annee" name="annee"><br><br>

  <input type="submit" value="Envoyer">
</form>

	<form action="tri.php" method="post">
		<select name="tri" id="tri">
			<option value="carburant">carburant</option>
			<option value="etat">Etat</option>
            <option value="modele">Modèle</option>
			<option value="prixmaximum">Prix maximum</option>
			<option value="prixminimum">Prix minimum</option>
			<option value="marque">Marque</option>
			<option value="cv">CV</option>
			<option value="annee">Année/option>
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