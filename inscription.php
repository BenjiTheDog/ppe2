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
<html>
 <head>
 <meta charset="utf-8">
<style>
body{
 background: #67BE4B;
}
#container{
 width:400px;
 margin:0 auto;
 margin-top:10%;
}
/* Bordered form */
form {
 width:100%;
 padding: 30px;
 border: 1px solid #f1f1f1;
 background: #fff;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#container h1{
 width: 38%;
 margin: 0 auto;
 padding-bottom: 10px;
}

/* Full-width inputs */
input[type=text], input[type=password] {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
 background-color: #53af57;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 cursor: pointer;
 width: 100%;
}
input[type=submit]:hover {
 background-color: white;
 color: #53af57;
 border: 1px solid #53af57;
}

</style>
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
 <h1>Inscription</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value="S'inscrire" >
 
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1 || $err==2)
 echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
 }
 ?>
 
 </form>
 </div>

 </body>
</html>