<?php
// Connexion à la base de données MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateur";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
	die("Connexion échouée : " . mysqli_connect_error());
}

// Vérification si le formulaire a été soumis
if (isset($_POST['submit'])) {
	// Récupération des données du formulaire
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Vérification si le nom d'utilisateur existe déjà dans la base de données
	$sql = "SELECT * FROM utilisateur WHERE nom_utilisateur='$username'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo "Le nom d'utilisateur existe déjà.";
	} else {
		// Insertion des données dans la base de données
		$sql = "INSERT INTO utilisateur (nom_utilisateur, mot_de_passe) VALUES ('$username', '$password')";
		if (mysqli_query($conn, $sql)) {
			echo "Inscription réussie.";
		} else {
			echo "Erreur : " . mysqli_error($conn);
		}
	}
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
</head>
<body>
	<h2>Inscription</h2>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="username">Nom d'utilisateur :</label>
		<input type="text" name="username" id="username" required>
		<label for="password">Mot de passe :</label>
		<input type="password" name="password" id="password" required>
		<input type="submit" name="submit" value="S'inscrire">
	</form>
</body>
</html>
