<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");


$user = new Users;
$work = new Works;
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>Portfolio Tom Dutreteau</title>
</head>
<body>
    <nav>
  <ul>
    <li class="deroulant"><a href="mesprojets.php">Mes projets &ensp;</a>
  
    </li>
    <li class="deroulant"><a href="login.php">Connexion &ensp;</a>

    </li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">A propos</a></li>
  </ul>
</nav>
    <a href="login.php"> Se connecter pour accéder au portfolio !</a>
    <p>Bonjour <?php if(isset($_SESSION["account"]["username"]))
    {
        echo($_SESSION["account"]["username"]);
    }
    else
    {
        echo "NOT CONNECTED";
    }
        ?></p>

    <br>
    <?php
        $allworks = $work->get_works();
        foreach($allworks as $w)
        {
            echo($w["title"]);
            echo("|");
            echo($w["description"]);
        }

    ?>
</body>
</html>