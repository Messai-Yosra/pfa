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
			case "category" : 
				require ("{$ROOT}{$DS}controller{$DS}controllerCategory.php");
				break;

			case "commande" : 
				require ("{$ROOT}{$DS}controller{$DS}controllerCommande.php");
				break;

			case "event" : 
				require ("{$ROOT}{$DS}controller{$DS}controllerEvent.php");
				break;
				
			case "utilisateur" :
				require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");  
				break;	
			
			case "produit" :
				require ("{$ROOT}{$DS}controller{$DS}controllerProduit.php");  
				break;	
			
			case "review" :
				require ("{$ROOT}{$DS}controller{$DS}controllerReview.php");  
				break;	

			case "default" :
				require ("{$ROOT}{$DS}controller{$DS}controllerUtilisateur.php");
				break;
}

?>