<?php
/* c'est le DTO (Data Transfert Object) la
représentation objet d’une table, c’est-à-dire
l’objet métier. Il ne contient que des propriétés
et des accesseurs correspondants. */

require_once ("Model.php"); 

class ModelReview extends Model{
//Même noms et ordre que dans la table utilisateur
  private $id;
  private $description ;
  private $id_user ;
  private $id_produit ;
  private $createdAt ;



  protected static $table = 'review';
  protected static $primary = 'id';
   
  // ====== constructeur =======
  public function __construct(
    $description = NULL,
    $id_user = NULL,
    $id_produit = NULL,
    $createdAt = NULL
  ) {
    if ($description != NULL && $id_user != NULL && $id_produit != NULL && $createdAt != NULL) {
      $this->description = $description ;
      $this->id_user = $id_user ;
      $this->id_produit = $id_produit ;
      $this->createdAt = $createdAt ;
    }
  } 
  
   
  
  // ==================== GETTERS ====================
    public function getId() {
         return $this->id;  
    }
    public function getDescription() {
         return $this->description;  
    }
    public function getId_user() {
         return $this->id_user;  
    }
    public function getId_produit() {
         return $this->id_produit;  
    }
    public function getCreatedAt() {
         return $this->createdAt;  
    }
  // ==================== SETTERS ====================

    public function setId($id) {
         $this->id = $id;
    }
    public function setDescription($description) {
         $this->description = $description;
    }
    public function setId_user($id_user) {
         $this->id_user = $id_user;
    }
    public function setId_produit($id_produit) {
         $this->id_produit = $id_produit;
    }
    public function setCreatedAt($createdAt) {
         $this->createdAt = $createdAt;
    }
  
}
?>
