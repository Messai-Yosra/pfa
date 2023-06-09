<?php
/* Le contrôleur reçoit les actions de l’utilisateur, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */

$controller = "utilisateur";
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelProduit.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelEvent.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelCategory.php"); 







if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="home";	
	
switch ($action) {

	case "contact":
        $pagetitle = "Contact";
		require ("{$ROOT}{$DS}view{$DS}contact.php");//"redirige" vers la vue

		// localhost/pfaFinal/view/home.php
        break; 

	case "home":
        $pagetitle = "Home";
       	$produits = ModelProduit::getAll();//appel au modèle pour gerer la BD
       	$events = ModelEvent::getAll();//appel au modèle pour gerer la BD
       	$categories = ModelCategory::getAll();//appel au modèle pour gerer la BD

		require ("{$ROOT}{$DS}view{$DS}home.php");//"redirige" vers la vue

		// localhost/pfaFinal/view/home.php
        break; 

	case "login":
		$pagetitle = "Login";
		if (isset($_REQUEST["signedup"]) ==1 ) {
			$signedup = 1;
		}
		require ("{$ROOT}{$DS}view{$DS}login.php");//"redirige" vers la vue
        break; 
	
	case "signup":
		$pagetitle = "Signup";
		require ("{$ROOT}{$DS}view{$DS}signup.php");//"redirige" vers la vue
        break; 
	
	case "logout":
		$pagetitle = "Logout";
		require ("{$ROOT}{$DS}view{$DS}logout.php");//"redirige" vers la vue
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
			isset($_REQUEST["id"]) 
		){ 
			$id = $_POST["id"];

			// ===== passwords not matching ========
			if ($_POST["password"] != $_POST["confirmpassword"]) {
				$up = ModelUtilisateur::select($id);
				//il faut vérifier que l'utilisateur existe dans la bdd  
				if($up!=null){ 
					$error = "Passwords do not match";
					$pagetitle = "Modifier l'utilisateur";
					$view = "update";
					require ("{$ROOT}{$DS}view{$DS}view.php");			
				}
			}


			// ======== all is good =============
			$tab = array(
			 "id" => $_POST["id"],
   			 "username" => $_POST["username"],
			 "name" => $_POST["name"],
			 "adresse" => $_POST["adresse"],
			 "password" => $_POST["password"] 
			 
   			 );
			$o = ModelUtilisateur::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($o!=null){
				$u = ModelUtilisateur::update($tab, $id);		
				// $pagetitle = "Utilisateur modifié";
				// $view = "updated";
				// require ("{$ROOT}{$DS}view{$DS}view.php");
				$up = ModelUtilisateur::select($id);
				$done = "Profile updated successfully";
				$pagetitle = "Modifier l'utilisateur";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");	
			}
		}	
		break;	














	
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
	
	// case "update":
	// 	if(isset($_REQUEST['id'])){
	// 		$id = $_REQUEST['id'];
	// 		$up = ModelUtilisateur::select($id);
	// 		//il faut vérifier que l'utilisateur existe dans la bdd 
	// 		if($up!=null){
	// 			$pagetitle = "Modifier l'utilisateur";
	// 			$view = "update";
	// 			require ("{$ROOT}{$DS}view{$DS}view.php");			
	// 		}
			
	// 	}
	// 	break;
		
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
