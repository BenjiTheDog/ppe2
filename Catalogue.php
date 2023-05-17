<?
    $hostname = "localhost";
    $user = "root";
    $pwd = "";
    $database = "vehiculeroy";
    $vehicules = null;

    try {
        $mysqlConnection = new PDO(
            'mysql:host=' . $hostname . ';dbname=' . $database,
            $user,
            $pwd
        ); 
        $condition = "";
        if (isset ($_POST["marque"])) {
            if ($_POST["marque"] != "Par défaut") {
                $condition .= " AND marque.Libelle = '" . $_POST["marque"] . "'";
            }
            if ($_POST["modele"] != "Par défaut") {
                $condition .= " AND vehicule.Modele = '" . $_POST["modele"] . "'";
            }
            if ($_POST["chevaux"] != "Par défaut") {
                $condition .= " AND vehicule.Chevaux = '" . $_POST["chevaux"] . "'";
            }
            if ($_POST["prix"] != "Par défaut") {
                $condition .= " AND vehicule.Prix = '" . $_POST["prix"] . "'";
            }
            if ($_POST["etat"] != "Par défaut") {
                $condition .= " AND etat.Libelle = '" . utf8_encode($_POST["etat"]) . "'";
            }
            if ($_POST["carburant"] != "Par défaut") {
                $condition .= " AND carburant.Libelle = '" . $_POST["carburant"] . "'";
            }
            if ($_POST["kilometrage"] != "Par défaut") {
                $condition .= " AND vehicule.Kilometrage = '" . $_POST["kilometrage"] . "'";
            }
            if ($_POST["Annee"] != "Par défaut") {
                $condition .= " AND vehicule.Annee= '" . $_POST["Annee"] . "'";
            }
        };
        $sqlQuery = "SELECT vehicule.Modele,vehicule.Kilometrage,vehicule.chevaux,vehicule.Annee,vehicule.Prix,vehicule.Image,vehicule.PrixP,carburant.Libelle as LC,
         marque.Libelle as LM,
         typevehicule.Libelle as LT,
         etat.Libelle as LE 
         FROM `vehicule` 
         INNER JOIN carburant on carburant.id = vehicule.Id_Carburant 
         INNER JOIN etat on etat.id = vehicule.id_Etat 
         INNER JOIN marque on marque.id = vehicule.id_Marque 
         INNER JOIN typevehicule on typevehicule.id = vehicule.id_TypeVehicule 
         WHERE marque.id > 0 $condition ";
         //Préparation de la requête par PDO
         echo $sqlQuery;
        $statment = $mysqlConnection->prepare($sqlQuery);
        //Exécution sur le serveur de BDD
        $statment->execute();
        $vehicules = $statment->fetchAll();
        $sqlQuery = "SELECT Modele FROM vehicule ORDER BY Modele ASC";
        $statment = $mysqlConnection->prepare($sqlQuery);
        $statment->execute();
        $modeles = $statment->fetchAll();
        $sqlQuery = "SELECT Libelle FROM marque ORDER BY Libelle ASC";
        $statment = $mysqlConnection->prepare($sqlQuery);
        $statment->execute();
        $marques = $statment->fetchAll();
        $sqlQuery = "SELECT Libelle FROM etat ORDER BY Libelle ASC";
        $statment = $mysqlConnection->prepare($sqlQuery);
        $statment->execute();
        $etats = $statment->fetchAll();
        $sqlQuery = "SELECT Libelle FROM carburant ORDER BY Libelle ASC";
        $statment = $mysqlConnection->prepare($sqlQuery);
        $statment->execute();
        $carburants = $statment->fetchAll();
        $sqlQuery = "SELECT Chevaux FROM vehicule ORDER BY Chevaux ASC";
        $statment = $mysqlConnection->prepare($sqlQuery);
        $statment->execute();
        $chevaux = $statment->fetchAll();
        $sqlQuery = "SELECT Prix FROM vehicule ORDER BY prix ASC";
        $statment = $mysqlConnection->prepare($sqlQuery);
        $statment->execute();
        $prix = $statment->fetchAll();
        $sqlQuery = "SELECT DISTINCT Kilometrage FROM vehicule ORDER BY Kilometrage ASC";
        $statment = $mysqlConnection->prepare($sqlQuery);
        $statment->execute();
        $kilometrages = $statment->fetchAll();
        $sqlQuery = "SELECT Annee FROM vehicule ORDER BY Annee ASC";
        $statment = $mysqlConnection->prepare($sqlQuery);
        $statment->execute();
        $annees = $statment->fetchAll();
    } catch (PDOException $error) {
        echo 'Échec de la connexion : ' . $error->getMessage();
    } finally {
        $mysqlConnection = null;
    }
   
    ?>    
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
<h4 class="orange"><center><a class="olink" href="login.php">connexion</a> / <a class="olink" href="inscription.php">inscription</a></center></h4>
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

    <h1>Résultats de la recherche</h1>
   
    <form class="FromCata" method="post">

        <label for="marque"></label>
        <select id="marque" name="marque">
            <option value="Par défaut" ></option> 
            <? foreach ($marques as $marque) { ?>
                <option value="<?=utf8_encode($marque["Libelle"])?>"><?=utf8_encode($marque["Libelle"])?></option>
            <?}?>
        </select><br></br>

        <label for="modele"></label>
        <select id="modele" name="modele">
        <option value="Par défaut" ></option> 
            <? foreach ($modeles as $modele) { ?>
                <option value="<?=utf8_encode($modele["Modele"])?>"><?=utf8_encode($modele["Modele"])?></option>
            <?}?> 
        </select><br></br>
        </select><br></br>

        <label for="cv"></label>
        <select id="chevaux" name="chevaux">
        <option value="Par défaut" ></option> 
            <? foreach ($chevaux as $cv) { ?>
                <option value="<?=$cv["Chevaux"]?>"><?=$cv["Chevaux"]?>cv</option>
            <?}?>
        </select><br><br>
        <label for="prix"></label>
        <select id="prix" name ="prix">
        <option value="Par défaut" ></option> 
            <? foreach ($prix as $px) { ?>
                <option value="<?=$px["Prix"]?>"><?=$px["Prix"]?> €</option>
            <?}?>
        </select><br><br>
        <label for="etat"></label>
        <select id="etat" name="etat">
        <option value="Par défaut" ></option> 
            <? foreach ($etats as $etat) { ?>
                <option value="<?=utf8_encode($etat["Libelle"])?>"><?=utf8_encode($etat["Libelle"])?></option>
            <?}?>
        </select><br><br>

        <label for="carburant"></label>
        <select id="carburant" name="carburant">
        <option value="Par défaut" ></option> 
        <? foreach ($carburants as $carburant) { ?>
                <option value="<?=utf8_encode($carburant["Libelle"])?>"><?=utf8_encode($carburant["Libelle"])?></option>
        <?}?>
        </select><br><br>

        <label for="kilometrage"></label>
        <select id="kilometrage" name="kilometrage">
        <option value="Par défaut" ></option> 
        <? foreach ($kilometrages as $kilometrage) { ?>
                <option value="<?=$kilometrage["Kilometrage"]?>"><?=$kilometrage["Kilometrage"]?>km</option>
        <?}?>
        </select><br><br>
        <label for="annee"></label>
        <select id="Annee" name="Annee">
        <option value="Par défaut" ></option> 
            <? foreach ($annees as $annee) { ?>
                <option value="<?=$annee["Annee"]?>"><?=$annee["Annee"]?></option>
            <?}?>
        </select><br><br>

        <input type="submit" value="Envoyer">
    </form>
    
    <table class="TCata">
        <tr class="trli">
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
        foreach ($vehicules as $vehicule) {
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
    <h3><center><a href="cgu.php"><font color=white>Condition générale d'utilisation</font></center></a></h3>
</body>

</html>