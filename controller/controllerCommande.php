<?php
/* Le contrôleur reçoit les actions de l’utilisateur, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */

$controller = "commande";
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelCommande.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelProduit.php"); 





if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="home";	
	
switch ($action) {

	
    case "readAll":
        $pagetitle = "Categories List";
        $view = "readAll";
       	$tab_u = ModelCategory::getAll();//appel au modèle pour gerer la BD
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
			$id = $_REQUEST['id'];
			$del = ModelCategory::select($id);
			
			if($del!=null){
				ModelCategory::delete($id);
				header('Location: index.php?controller=category&action=readAll');
			}
		}
	    break;
	
	case "create":
		$pagetitle = "Add Category";
		$view = "create";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created": // Action du formulaire de la création 
		if(
			isset($_REQUEST["id_produit"]) 
		){ 
			 
			$id_produit = $_REQUEST["id_produit"];  
            $name_user= $_REQUEST["name_user"]; 
			 //Si l'utilisateur n'existe pas donc on l'ajoute
									//il faut créer une object ModelUtilisateur pour accéder à insert car elle n'est pas static
				$u = new ModelCommande(
                   Date("Y-m-d H:i:s"),
				   $name_user,
                   $name_user
				);	
				$tab = array(
				"id" => null,
				"createdAt" => date("Y-m-d H:i:s"),				

				"name_user" => $name_user,	
				"id_produit" => $id_produit,				

				);		
				echo $u->insert($tab);
				$pagetitle = "Order created";
				$done = "Order created.";
				$view = "created"; 
                $product = ModelProduit::select($id_produit);
				require ("{$ROOT}{$DS}view{$DS}view.php");
			
		}
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$up = ModelCategory::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($up!=null){
				$pagetitle = "Edit Category";
				$view = "update";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated": // Action du formulaire de modification 
		if(
			isset($_REQUEST["id"]) && isset($_REQUEST["name_category"])
		){
			$id = $_REQUEST["id"];
			$tab = array(
				"name_category" => $_REQUEST["name_category"],
   			 );
			$o = ModelCategory::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($o!=null){
				$u = ModelCategory::update($tab, $id);		
				$pagetitle = "Category edited";
				$view = "update";
				$done="Category Updated." ; 
				$up = ModelCategory::select($id);
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
		
	
}
?>
