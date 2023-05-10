
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utilisateur";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Vérification si le formulaire d'inscription a été soumis
if(isset($_POST['register'])) {

    // Récupération des valeurs des champs du formulaire
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vérification si le nom d'utilisateur existe déjà dans la base de données
    $query = "SELECT * FROM utilisateur WHERE nom_utilisateur='$username'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        // Si le nom d'utilisateur existe déjà, afficher un message d'erreur
        echo "<p style='color:red'>Ce nom d'utilisateur existe déjà.</p>";
    } else {
        // Sinon, insérer les valeurs dans la base de données
        $query = "INSERT INTO utilisateur (nom_utilisateur, mot_de_passe) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $query);

        if($result) {
            // Si l'insertion a réussi, afficher un message de succès
            echo "<p style='color:green'>Inscription réussie ! Vous pouvez maintenant vous connecter.</p>";
        } else {
            // Sinon, afficher un message d'erreur
            echo "<p style='color:red'>Erreur lors de l'inscription.</p>";
        }
    }
}

mysqli_close($conn); // Fermeture de la connexion à la base de données
?>

<html>
    <header>
        <style>
body {
  background: #67BE4B;
}

#container {
  width: 400px;
  margin: 0 auto;
  margin-top: 10%;
}

form {
  width: 100%;
  padding: 30px;
  border: 1px solid #f1f1f1;
  background: #fff;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#container h1 {
  width: 38%;
  margin: 0 auto;
  padding-bottom: 10px;
}

input[type=text],
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

input[type=submit] {
  background-color: #53af57;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

input[type=submit]:hover,
.btn:hover {
  background-color: white;
  color: #53af57;
  border: 1px solid #53af57;
}

.btn {
  background-color: #53af57;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

a {
  text-decoration: none;
  color: white;
}


            </style>
    </header>
<body>


<form id="register-form" action="" method="POST">
    <h1>Inscription</h1>

    <label><b>Nom d'utilisateur</b></label>
    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

    <label><b>Mot de passe</b></label>
    <input type="password" placeholder="Entrer le mot de passe" name="password" required>

    <input type="submit" id='submit' name='register' value="S'inscrire" >
    <button class="btn" type="button" onclick="window.location.href='login.php'">Se connecter</button>
</form>
<script>
    document.getElementById("register-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Empêche le formulaire de se soumettre
        // Afficher une pop-up avec un message de succès
        alert("Inscription réussie !");
        // Rediriger l'utilisateur vers la page de connexion
        window.location.href = "login.php";
    });
</script>

</body>
</html>