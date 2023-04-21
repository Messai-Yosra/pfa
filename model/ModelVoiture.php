<?php

require_once ("Model.php"); 

class ModelVoiture extends Model {
  protected static $table = 'voiture';
  protected static $primary = 'immatriculation';
  
  public function __construct($m = NULL, $c = NULL, $i = NULL, $p = NULL) {
    if (!is_null($m) && !is_null($c) && !is_null($i)) {
      $this->marque = $m;
      $this->couleur = $c;
      $this->immatriculation = $i;
	  $this->proprietaire_ncin=$p;
    }
  }  
  
  public function getMarque() {
       return $this->marque;  
  }
  
  public function getImmatriculation() {
       return $this->immatriculation;  
  }
  
  public function getCouleur() {
       return $this->couleur;  
  }

  public function getProprietaire_ncin() {
       return $this->proprietaire_ncin;  
  }
   
}
?>
