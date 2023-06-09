<?php
/* Le contrôleur reçoit les actions de l’utilisateur, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */

$controller = "event";
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelProduit.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelCategory.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelReview.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelEvent.php"); 





if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="home";	
	
switch ($action) {

	
    case "readAll":
        $pagetitle = "Events List";
        $view = "readAll";
       	$tab_u = ModelEvent::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelEvent::select($id);
				if($u!=null){
					//$user = ModelUtilisateur::select($u["id_user"]);
					$pagetitle = "Event Details";

       				$products = ModelProduit::getAll();//appel au modèle pour gerer la BD
       				$events = ModelEvent::getAll();//appel au modèle pour gerer la BD
       				$categories = ModelCategory::getAll();//appel au modèle pour gerer la BD

					 
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$del = ModelEvent::select($id);
			
			if($del!=null){
				ModelEvent::delete($id);
				header('Location: index.php?controller=event&action=readAll');
			}
		}
	    break;
	
	case "create":
		$pagetitle = "Add Event";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created": // Action du formulaire de la création  
		if(
			isset($_REQUEST["title"]) && isset($_REQUEST["image"]) && isset($_REQUEST["description"]) && isset($_REQUEST["start_date"]) && isset($_REQUEST["name_user"]) 
		){ 
			 
			$title = $_REQUEST["title"];
            $image = $_REQUEST["image"];
            $description = $_REQUEST["description"];
            $start_date = $_REQUEST["start_date"];
            $name_user = $_REQUEST["name_user"];


 
			 //Si l'utilisateur n'existe pas donc on l'ajoute
									//il faut créer une object ModelUtilisateur pour accéder à insert car elle n'est pas static
				$u = new ModelEvent(
					$title,
                    $image,
                    $description,
                    $start_date,
                    $name_user,
                    date("Y-m-d H:i:s")
				);	
				$tab = array(
				"id" => null,
				"title" => $title,	
                "image" => $image,
                "description" => $description,
                "start_date" => $start_date,
                "name_user" => $name_user,
                "createdAt" => date("Y-m-d H:i:s")
				);		
				echo $u->insert($tab);
				$pagetitle = "Event created";
				$done = "Event created.";
				$view = "create"; 
				require ("{$ROOT}{$DS}view{$DS}view.php");
			
		}
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelEvent::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($u!=null){
				$pagetitle = "Edit Event";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated": // Action du formulaire de modification 
		if(
			isset($_REQUEST["id"]) && isset($_REQUEST["title"]) && isset($_REQUEST["image"]) && isset($_REQUEST["description"]) && isset($_REQUEST["start_date"]) && isset($_REQUEST["name_user"]) 
		){
			$id = $_REQUEST["id"];
			$title = $_REQUEST["title"];
            $image = $_REQUEST["image"];
            $description = $_REQUEST["description"];
            $start_date = $_REQUEST["start_date"];
            $name_user = $_REQUEST["name_user"];
			$tab = array(
				"id" => $id,
                "title" => $title,	
                "image" => $image,
                "description" => $description,
                "start_date" => $start_date,
                "name_user" => $name_user,
                "createdAt" => $_REQUEST["createdAt"]
   			 );
			$o = ModelEvent::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($o!=null){
				$u = ModelEvent::update($tab, $id);		
				$pagetitle = "Event edited";
				$view = "update";
				$done="Event Updated." ; 
				$up = ModelEvent::select($id);
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
		
	
}
?>
