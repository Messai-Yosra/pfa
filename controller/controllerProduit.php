<?php
/* Le contrôleur reçoit les actions de l’utilisateur, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */

$controller = "produit";
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelProduit.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelCategory.php");
require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php"); 
require_once ("{$ROOT}{$DS}model{$DS}ModelReview.php"); 







if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="home";	
	
switch ($action) {

	
    case "readAll":
        $pagetitle = "Products List";
        $view = "readAll";
       	$tab_u = ModelProduit::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelProduit::select($id);
				if($u!=null){
					$user = ModelUtilisateur::select($u["id_user"]);
					$pagetitle = "Product Details";
					$reviews = ModelReview::getAll();
					$review_all = array();
					foreach ($reviews as $review) {
						if ($review["id_produit"] == $u["id"]) {
							$review_all[] = $review;
						}
					}
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$del = ModelProduit::select($id);
			
			if($del!=null){
				ModelProduit::delete($id);
				header('Location: index.php?controller=produit&action=readAll');
			}
		}
	    break;
	
	case "create":
		$pagetitle = "Add Category";
		$view = "create";
       	$categories = ModelCategory::getAll();//appel au modèle pour gerer la BD
         
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created": // Action du formulaire de la création  
		if(
			isset($_REQUEST["name"]) && isset($_REQUEST["description"]) && isset($_REQUEST["image"]) && isset($_REQUEST["price"]) && isset($_REQUEST["name_category"]) && isset($_REQUEST["id_user"]) 
		){ 
			 
			$name_category = $_REQUEST["name_category"];  
            $name = $_REQUEST["name"];
            $description = $_REQUEST["description"];
            $image = $_REQUEST["image"];
            $price = $_REQUEST["price"];
			$id_user = $_REQUEST["id_user"];

 
			 //Si l'utilisateur n'existe pas donc on l'ajoute
									//il faut créer une object ModelUtilisateur pour accéder à insert car elle n'est pas static
				$u = new ModelProduit( 
                    $name,
                    $description,
                    $image,
                    $price,
                    $name_category,
					$id_user
				);	
				$tab = array(
				"id" => null,
                "name" => $name,
                "description" => $description,
                "image" => $image,
                "price" => $price,
				"name_category" => $name_category,		
				"id_user" => $id_user,
				);		
				echo $u->insert($tab);
				$pagetitle = "Product created";
				$done = "Product created.";
				$view = "create"; 
				require ("{$ROOT}{$DS}view{$DS}view.php");
			
		}
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$up = ModelProduit::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($up!=null){
				$pagetitle = "Edit Category";
				$view = "update";
               	$categories = ModelCategory::getAll();//appel au modèle pour gerer la BD

				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated": // Action du formulaire de modification 
		if(
			isset($_REQUEST["id"]) && isset($_REQUEST["name"]) && isset($_REQUEST["description"]) && isset($_REQUEST["image"]) && isset($_REQUEST["price"]) && isset($_REQUEST["name_category"]) && isset($_REQUEST["id_user"]) 
		){
			$id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            $description = $_REQUEST["description"];
            $image = $_REQUEST["image"];
            $price = $_REQUEST["price"];
            $name_category = $_REQUEST["name_category"];
			$id_user = $_REQUEST["id_user"];


			$tab = array(
        		"id" => $id,
                "name" => $name,
                "description" => $description,
                "image" => $image,
                "prix" => $price,                        
				"name_category" => $_REQUEST["name_category"],
				"id_user" => $_REQUEST["id_user"],
   			 );
			$o = ModelProduit::select($id);
			//il faut vérifier que l'utilisateur existe dans la bdd 
			if($o!=null){
				$u = ModelProduit::update($tab, $id);		
				$pagetitle = "Product edited";
				$view = "update";
				$done="Product Updated." ; 
				$up = ModelProduit::select($id);
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
		
	
}
?>
