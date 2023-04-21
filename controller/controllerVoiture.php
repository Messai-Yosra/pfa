<?php
$controller = "voiture";

require_once ("{$ROOT}{$DS}model{$DS}ModelVoiture.php"); // chargement du modèle

if(isset($_GET['action']))
	$action = $_GET['action'];// recupère l'action passée dans l'URL
 else $action="readAll";
	//else $action="create";

require_once ("{$ROOT}{$DS}model{$DS}ModelUtilisateur.php");

switch ($action) {
	case "readAll":
		$pagetitle = "Liste des voitures";
		$view = "readAll";
		$tab_v = ModelVoiture::getAll();
		require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
		break;
	
	case "read":
		if(isset($_GET['immatriculation'])){
		$immat = $_GET['immatriculation'];
		$voiture = ModelVoiture::select($immat);
		if($voiture!=null){
		$pagetitle = "Details de la voiture";
		$view = "read";
		require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
		}
		}
		break;
		
	case "delete":
	if(isset($_REQUEST['immatriculation'])){
		$immat = $_REQUEST['immatriculation'];
		$del = ModelVoiture::select($immat);
		if($del!=null){
		$del->delete($immat);
		header('Location: index.php?controller=voiture&action=readAll');
		}
	}
		break;
		
	case "create":
		$pagetitle = "Enregistrer une nouvelle voiture";
		$view = "create";
		$tab_utilisateurs = ModelUtilisateur::getAll();//pour list HTML select appel au modèle pour récupérer les proprietaires de la BD
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
	
	case "created": // Action du formulaire de la création
		if(isset($_REQUEST['marque']) && isset($_REQUEST['couleur']) && isset($_REQUEST['immatriculation'])&& isset($_REQUEST['proprietaire_ncin'])){
		$marque = $_REQUEST["marque"];
		$couleur = $_REQUEST["couleur"];
		$immatriculation = $_REQUEST["immatriculation"];
		$proprietaire_ncin= $_REQUEST["proprietaire_ncin"];
			//il faut vérifier que l'utilisateur n'existe pas dans la bdd 
		$recherche = ModelVoiture::select($immatriculation);
		if($recherche==null){ //Si l'utilisateur n'existe pas donc on l'ajoute
		$voiture = new ModelVoiture($marque, $couleur, $immatriculation, $proprietaire_ncin);
		$tab = array(
		"immatriculation" => $immatriculation,
		"marque" => $marque,
		"couleur" => $couleur,
		"proprietaire_ncin" => $proprietaire_ncin);
		$voiture->insert($tab);
		$pagetitle = "Voiture Enregistrée";
		$view = "created";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		}
		}
		break;
		
	
	case "update":
	if(isset($_REQUEST['immatriculation'])){
		$oldimmat = $_REQUEST['immatriculation'];
		//$choixAction = "update";
		//il faut vérifier que la voiture existe dans la bdd 
		$tab_utilisateurs = ModelUtilisateur::getAll();//pour list HTML select appel au modèle pour récupérer les proprietaires de la BD
		$oldVoiture = ModelVoiture::select($oldimmat);
		if($oldVoiture !=null){
		$pagetitle = "Modifier la voiture";
		$view = "update";
		//$oldVoiture = ModelVoiture::select($oldimmat);
		require ("{$ROOT}{$DS}view{$DS}view.php");
	}
	}
		break;
		
	case "updated": // Action du formulaire de modification
		if(isset($_REQUEST['marque']) && isset($_REQUEST['couleur']) && isset($_REQUEST['immatriculation'])&& isset($_REQUEST['proprietaire_ncin'])){
		$oldimmat = $_GET['immatriculation'];
		$tab = array(
		"immatriculation" => $_POST["immatriculation"],
		"marque" => $_POST["marque"],
		"couleur" => $_POST["couleur"],
		"proprietaire_ncin" => $_POST["proprietaire_ncin"]);
		
		$oldVoiture = ModelVoiture::select($oldimmat);
		//il faut vérifier que l'utilisateur existe dans la bdd 
		if($oldVoiture!=null){
		$UpdatedVoiture = $oldVoiture->update($tab, $oldimmat);
		$pagetitle = "Voiture modifiée avec succès";
		$view = "updated";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		}
		}
		break;
}
?>