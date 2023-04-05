<!DOCTYPE html>
<html>

<head>
	<title>Garage Roy</title>
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<meta charset="utf-8">
</head>

<body>
	<table border="1" width="100%" height="700">
		<tr>
			<td colspan="2" align="center"><img src="img/Mini-LogoPNG2.png" width="150">
				<br />
				<b>Garage Roy</b>
			</td>
		</tr>
		<tr>
			<td width="15%">
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="catalogue.php">Catalogue</a></li>
					<li><a href="tarification.php">Tarifs</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</td>
			<td>
			<p>Motif : <?= $_GET["Motif"]?> </p>
			<p>Horaire : <?= $_GET["horaire"]?> </p>
		
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">&copy;2022 Garage Roy - 42 rue Roger Salengro - 32000 Auch <br /> Tel :
				05-99-99-99-99<br /> Tous droits réservés<br /> <a href="cgu.html">Conditions générales
					d'utilisation</a></td>
		</tr>
	</table>
</body>

</html>