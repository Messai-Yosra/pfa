<?php
 
 include 'imports.php' ;
// __DIR__ est une constante "magique" de PHP qui contient le chemin du dossier courant
$ROOT = __DIR__;

// DS contient le slash des chemins de fichiers, c'est-à-dire '/' sur Linux et '\' sur Windows
$DS = DIRECTORY_SEPARATOR;  

$controleur_default = "utilisateur" ;
 
// header('/pfaFinal/view/home.php');

// localhost/forest-time?controller  

if(!isset($_REQUEST['controller']))
		//$controller récupère $controller_default;
		$controller = $controleur_default;    // index.php
	else 
		// recupère l'action passée dans l'URL
		$controller = $_REQUEST['controller'];


		//$controller = "VOITURE" ; 

switch ($controller) {
			case "voiture" :
			// {$var} pour concaténer les chaînes de caractères 
				require ("{$ROOT}{$DS}controller{$DS}controllerVoiture.php");
				break;
				
			case "utilisateur" :
				require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");

				// $ROOT = "localhost/forest-time" ; 
				// $DS = "/" ;
				// "controller" ; 
				// $DS = "/" ;
				// "controllerUtilisateur.php" ;

				// localhost/forest-time/controller/controllerUtilisateur.php


				break;	
				
			case "default" :
				require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
				break;
}

?>