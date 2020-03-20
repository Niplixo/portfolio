 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
<form action="insert.php" method="post">

	Projets: <input type="projet" name="projet" />
	descriptions: <input type="description" name="description" />
	image: <input type="image" name="image" />
	
	 
	<input type="submit" />
	</form>

	</form>	
		<?php
		$mysqli = new mysqli('localhost', 'root', 'root', 'php');
		$mysqli->set_charset("utf8");
		$requete = 'SELECT * FROM projets';
		$resultat = $mysqli->query($requete);
		while ($ligne = $resultat->fetch_assoc()) {
			echo $ligne['projet'].' <br> '.$ligne['descriptions'].$ligne['image'].' <br>';
		}
		$mysqli->close();
		?>
</body>
</html>