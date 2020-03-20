
<?PHP
	$db = mysql_connect ("mysql:dbname=php;host=localhost", "root", "root") ;
	si (! $db)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}

	$sql=" INSERT INTO `projet` (`id`, `projet`, `descriptions`, `image`)
	VALUES
	('','$_POST[projet]','$_POST[description]','$_POST[image]'";

	if (!mysql_query($sql,$db))
	{
	die('impossible d’ajouter cet enregistrement : ' . mysql_error());
	}
	echo "L’enregistrement est ajouté ";

	mysql_close($db)
	?>
	<a href=" mesprojets.php ">Retour au formulaire</a>
