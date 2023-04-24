<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href='./CSS/stylesheet.css' />
    <title><?php echo $pagetitle; ?></title>
    <?php include_once 'imports.php' ; ?>
</head>
<body>
<?php
 
require_once($ROOT.$DS."view".$DS."navbar.php");

// Déterminer la vue adéquate

/*  Si $controleur='voiture' et $view='readAll',
 alors $filepath=".../view/voiture/"
       $filename="viewReadAllVoiture.php";
 et on charge '.../view/voiture/viewReadAllVoiture.php'
$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}";  */

// détermine le chemin de la vue en fonction du controller qu'on utilise
$filepath = $ROOT.$DS."view".$DS.$controller.$DS;

// localhost/forest-time/view/utilisateur/

// détermine le nom du fichier
$filename = "view".ucfirst($view).ucfirst($controller).'.php'; 

// viewUpdateUtilisateur.php

require_once($filepath.$filename);

// localhost/forest-time/view/utilisateur/viewUpdateUtilisateur.php


require_once("index.php");







require_once($ROOT.$DS."view".$DS."footer.php");
?>
</body>
</html>