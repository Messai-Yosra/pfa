<?php
/* c'est le DTO (Data Transfert Object) la
représentation objet d’une table, c’est-à-dire
l’objet métier. Il ne contient que des propriétés
et des accesseurs correspondants. */

require_once ("Model.php"); 

class ModelCommande extends Model{
//Même noms et ordre que dans la table utilisateur
  private $id;
  private $createdAt ;
  private $name_user ;
  private $id_produit ;



  protected static $table = 'commande';
  protected static $primary = 'id';
   
  // ====== constructeur =======
  
  public function __construct(
    $createdAt = NULL, $name_user = NULL, $id_produit = NULL) {
    if (!is_null($createdAt) && !is_null($name_user) && !is_null($id_produit)) {
      $this->createdAt = $createdAt ;
      $this->name_user = $name_user ;
      $this->id_produit = $id_produit ;
    }
  }
  
   
  
  // ==================== GETTERS ====================
    public function getId() {
         return $this->id;  
    }
    public function getCreatedAt() {
         return $this->createdAt;  
    }
    public function getName_user() {
         return $this->name_user;  
    }
    public function getId_produit() {
         return $this->id_produit;  
    }
  // ==================== SETTERS ====================

    public function setId($id) {
         $this->id = $id;
    }
    public function setCreatedAt($createdAt) {
         $this->createdAt = $createdAt;
    }
    public function setName_user($name_user) {
         $this->name_user = $name_user;
    }
    public function setId_produit($id_produit) {
         $this->id_produit = $id_produit;
    }

  
}
?>
