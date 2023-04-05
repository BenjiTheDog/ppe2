<?php 
if (isset($_POST["nom"])) {
	  
}

$hostname = "localhost";
$user = "root";
$pwd = "";
$database = "garageroy";

try
{
$mysqlConnection = new PDO('mysql:host=' . $hostname . ';dbname=' . $database,
$user, $pwd);
echo "Connexion réussie<br/>";
} catch (PDOException $error) {
echo 'Échec de la connexion : ' . $error->getMessage();
} finally{$mysqlConnection = null;
	$sqlQuery = "SELECT * FROM garageroy"; }
