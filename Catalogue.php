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
			<option name="carburant" value="carburant">Carburant</option>
			<option name="etat" value="etat">Etat</option>
            <option name="marque" value="marque">Marque</option>
			<option name="typevehicule" value="typevehicule">Type de véhicule</option>
            <option name="vehicule" value="vehicule">Vehicule</option>
		</select>
        <div class="arrow-container">
            <i class="arrow up"></i>
            <i class="arrow down"></i>
        </div>
		<input type="submit" value="Trier">
	</form>
    <h3><center><a href="cgu.php"><font color=white>Condition générale d'utilisation</font></center></a></h3>
    </body>
</html>