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
  private $name_user ;
  private $id_produit ;
  private $createdAt ;



  protected static $table = 'review';
  protected static $primary = 'id';
   
  // ====== constructeur =======
  public function __construct(
    $description = NULL,
    $name_user = NULL,
    $id_produit = NULL,
    $createdAt = NULL
  ) {
    if ($description != NULL && $name_user != NULL && $id_produit != NULL && $createdAt != NULL) {
      $this->description = $description ;
      $this->name_user = $name_user ;
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
     public function getName_user() {
           return $this->name_user;  
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
     public function setName_user($name_user) {
            $this->name_user = $name_user;
     }
    public function setId_produit($id_produit) {
         $this->id_produit = $id_produit;
    }
    public function setCreatedAt($createdAt) {
         $this->createdAt = $createdAt;
    }
  
}
?>
