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
        <h1><a href="Accueil.html"></a><img class="logobar" src="Logo2.png">
            <form action="#" method="get">
                <input type="text" placeholder="Rechercher sur GarageRoy"> <!--Barre de recherche a rendre fonctionnel-->
            </form>
        </h1>
    </header>
    <header>
        <H3 class="barre">&nbsp;</H3>
        <H3>
            <center><a class="link" href="Accueil.html">Accueil</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="link" href="Catalogue.php">Catalogue</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="link" href="Actu.html">Actualités</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="link" href="Contact.php">Contact</a></center>
        </H3>
        <H3 class="orange">
            <center>‾‾‾‾‾‾‾‾‾&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</center>
        </H3>
    </header>
<<<<<<< HEAD
    <h1>Recherche avancée</h1>
=======
    <h1>Résultats de la recherche</h1>


<<<<<<< HEAD
	
    <?
    $hostname = "localhost";
    $user = "root";
    $pwd = "";
    $database = "vehiculeroy";

    try {
        $mysqlConnection = new PDO(
            'mysql:host=' . $hostname . ';dbname=' . $database,
            $user,
            $pwd
        );
        echo "Connexion réussie<br/>";
        $sqlQuery = "SELECT vehicule.Modele,vehicule.Kilometrage,vehicule.chevaux,vehicule.Annee,vehicule.Prix,vehicule.Image,vehicule.PrixP,carburant.Libelle as LC, marque.Libelle as LM,typevehicule.Libelle as LT,etat.Libelle as LE FROM `vehicule` INNER JOIN carburant on carburant.id = vehicule.Id_Carburant INNER JOIN etat on etat.id = vehicule.id_Etat INNER JOIN marque on marque.id = vehicule.id_Marque INNER JOIN typevehicule on typevehicule.id = vehicule.id_TypeVehicule  "; //Préparation de la requête par PDO
        $statment = $mysqlConnection->prepare($sqlQuery);
        //Exécution sur le serveur de BDD
       $statment->execute();
       $vehicules = $statment->fetchAll();
       
    } catch (PDOException $error) {
        echo 'Échec de la connexion : ' . $error->getMessage();
    } finally {



        $mysqlConnection = null;
    }
    ?>
    <form class="FromCata">
		<form>
  <label for="marque">Marque :</label>
  <select id="marque" name="marque">
    <option value="neuf">Renault</option>
    <option value="occasion">BMW</option>
</select><br></br>

  <label for="modele">Modèle :</label>
  <select id="modele" name="modele">
    <option value="neuf">Tesla modèle X</option>
    <option value="occasion">Renault Alpine</option>
    </select><br></br>
	</select><br></br>

  <label for="cv">CV :</label>
  <input type="number" id="cv" name="cv">

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

    <?
    $hostname = "localhost";
    $user = "root";
    $pwd = "";
    $database = "vehiculeroy";

    try {
        $mysqlConnection = new PDO(
            'mysql:host=' . $hostname . ';dbname=' . $database,
            $user,
            $pwd
        );
        echo "Connexion réussie<br/>";
        $sqlQuery = "SELECT vehicule.Modele,vehicule.Kilometrage,vehicule.chevaux,vehicule.Annee,vehicule.Prix,vehicule.Image,vehicule.PrixP,carburant.Libelle as LC, marque.Libelle as LM,typevehicule.Libelle as LT,etat.Libelle as LE FROM `vehicule` INNER JOIN carburant on carburant.id = vehicule.Id_Carburant INNER JOIN etat on etat.id = vehicule.id_Etat INNER JOIN marque on marque.id = vehicule.id_Marque INNER JOIN typevehicule on typevehicule.id = vehicule.id_TypeVehicule  "; //Préparation de la requête par PDO
        $statment = $mysqlConnection->prepare($sqlQuery);
        //Exécution sur le serveur de BDD
       $statment->execute();
       $vehicules = $statment->fetchAll();
       
    } catch (PDOException $error) {
        echo 'Échec de la connexion : ' . $error->getMessage();
    } finally {



        $mysqlConnection = null;
    }
    ?>
    <table>
        <tr>           
    <table class="TCata">
        <tr class="trli" >
            
            <td>Modele</td>
            <td>Kilometrage</td>
            <td>chevaux</td>
            <td>Annee</td>
            <td>Prix (en euros)</td>
            <td>Image</td>
            <td>PrixPremium</td>
            <td>Carburant</td>
            <td>Marque</td>
            <td>TypeVehicule</td>
            <td>Etat</td>
        </tr>
        <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle
        foreach ($vehicules as $vehicule){
        ?>
            <tr>
                <td><?php echo $vehicule['Modele']; ?></td>
                <td><?php echo $vehicule['Kilometrage']; ?></td>
                <td><?php echo $vehicule['chevaux']; ?></td>
                <td><?php echo $vehicule['Annee']; ?></td>
                <td><?php echo $vehicule['Prix']; ?></td>
                <td><img width="150" src=".<?php echo $vehicule['Image']; ?>" /></td>
                <td><?php echo $vehicule['PrixP']; ?></td>
                <td><?php echo utf8_encode($vehicule['LC']); ?></td>
                <td><?php echo $vehicule['LM']; ?></td>
                <td><?php echo utf8_encode($vehicule['LT']); ?></td>
                <td><?php echo utf8_encode($vehicule['LE']); ?></td>
            </tr>
        <?
        } //fin de la boucle, le tableau contient toute la BDD
        
        ?>
    </table>
</body>
	<form action="tri.php" method="post">
		<select name="tri" id="tri">

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
        <div class="arrow-container">
            <i class="arrow up"></i>
            <i class="arrow down"></i>
        </div>
		<input type="submit" value="Trier">
	</form>
    <h3><center><a href="cgu.php"><font color=white>Conditions générales d'utilisations</font></center></a></h3>
    </body>
</html>