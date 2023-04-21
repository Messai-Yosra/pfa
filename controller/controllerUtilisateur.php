<?php
/* Le contrôleur reçoit les actions de l’utilisateur, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */

$controller = "utilisateur";
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); 

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des utilisateurs";
        $view = "readAll";
       	$tab_u = ModelUtilisateur::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$ncin = $_REQUEST['id'];
			$u = ModelUtilisateur::select($id);
				if($u!=null){
					$pagetitle = "Details de l'utilisateur";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id'])){
			$ncin = $_REQUEST['id'];
			$del = ModelUtilisateur::select($id);
			if($del!=null){
			$del->delete($ncin);
			/*redirection vers le contrôleur et l’action par défaut*/
			header('Location: index.php?controller=utilisateur&action=readAll');
			}
		}
	    break;
	
	case "create":
		$pagetitle = "Enregistrer un utilisateur";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created": // Action du formulaire de la création 
		if(
			isset($_REQUEST["username"]) && isset($_REQUEST["name"]) && isset($_REQUEST["adresse"]) && isset($_REQUEST["password"]) && isset($_REQUEST["createdAt"])
		){
			 
			$username = $_REQUEST["username"];
			$name = $_REQUEST["name"];
			$adresse = $_REQUEST["adresse"];
			$password = $_REQUEST["password"];
			$createdAt = $_REQUEST["createdAt"];

			//il faut vérifier que l'utilisateur n'existe pas dans la bdd 
			$recherche = ModelUtilisateur::select($username);

 
			if($recherche==null){ //Si l'utilisateur n'existe pas donc on l'ajoute
									//il faut créer une object ModelUtilisateur pour accéder à insert car elle n'est pas static
				$u = new ModelUtilisateur(
					$username,
					$name,
					$adresse,
					$password,
					$createdAt
				);	
				$tab = array(
				"username" => $username,
				"name" => $name,
				"adresse" => $adresse,
				"password" => $password,
				"createdAt" => $createdAt				
				);				
				$u->insert($tab);
				$pagetitle = "Utilisateur Enregistré";
				$view = "created";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}	
		}
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$up = ModelUtilisateur::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($up!=null){
				$pagetitle = "Modifier l'utilisateur";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated": // Action du formulaire de modification 
		if(
			isset($_REQUEST["id"]) && isset($_REQUEST["username"]) && isset($_REQUEST["name"]) && isset($_REQUEST["adresse"]) && isset($_REQUEST["password"]) && isset($_REQUEST["createdAt"])
		){
			$id = $_REQUEST["id"];
			$tab = array(
   			 "username" => $_REQUEST["username"],
			 "name" => $_REQUEST["name"],
			 "adresse" => $_REQUEST["adresse"],
			 "password" => $_REQUEST["password"],
			 "createdAt" => $_REQUEST["createdAt"]
			 
   			 );
			$o = ModelUtilisateur::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($o!=null){
				$u = ModelUtilisateur::update($tab, $id);		
				$pagetitle = "Utilisateur modifié";
				$view = "updated";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
		
	
}
?>
