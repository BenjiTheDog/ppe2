
<?php
// Connexion à la base de données
$host = "localhost"; // Adresse du serveur de base de données
$dbname = "utilisateur"; // Nom de la base de données
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$messageerreur="";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Configuration pour afficher les erreurs de requête
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Vérification du formulaire d'inscription
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Vérification si le nom d'utilisateur existe déjà
    $stmt = $pdo->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur = :username");
    $stmt->execute(["username" => $username]);
    $existingUser = $stmt->fetch();

   
    if ($existingUser) {
      $messageerreur='Nom d\'utilisateur déja enregistré';
    } else {
        // Enregistrement du nouvel utilisateur dans la base de données
        $stmt = $pdo->prepare("INSERT INTO utilisateur (nom_utilisateur, mot_de_passe) VALUES (:username, :password)");
        $stmt->execute(["username" => $username, "password" => $password]);

        // Redirection vers une page de succès ou autre action souhaitée
        header("Location: login.php");
        exit();
    }
}
?>


<html>
    <header>
        <style>
body {
  background: black;
  color: #fff;
}

#container {
  width: 400px;
  margin: 0 auto;
  margin-top: 30%;
  
}

form {
  width: 20%;
  padding: 30px;
  border: 1px solid #403E3E;
  background: #403E3E;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  margin:auto ;
  margin-top: 10%;


  

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
  background-color: orange;
  color: #403E3E;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

input[type=submit]:hover,
.btn:hover {
  background-color: #403E3E;
  color: orange;
  border: 1px solid orange;
}

.btn {
  background-color: orange;
  color: #403E3E;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.erreur{
 color: red;      
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
    <button class="btn" type="button" onclick="window.location.href='Accueil.html'">Revenir à l'accueil</button>
    <span class="erreur">
    <?=$messageerreur ?>
</span>
</form>

</body>
</html>