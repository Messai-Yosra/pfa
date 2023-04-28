<?php
/* c'est le DTO (Data Transfert Object) la
représentation objet d’une table, c’est-à-dire
l’objet métier. Il ne contient que des propriétés
et des accesseurs correspondants. */

require_once ("Model.php"); 

class ModelProduit extends Model{
//Même noms et ordre que dans la table utilisateur
  private $id;
  private $name;
  private $description;
  private $image;
  private $prix;
  private $id_category;


  protected static $table = 'produit';
  protected static $primary = 'id';
   
  // ====== constructeur =======
  public function __construct(
    $name=NULL,
    $description=NULL,
    $image=NULL,
    $prix=NULL,
    $id_category=NULL
  ) {
    if ($name != NULL && $description != NULL && $image != NULL && $prix != NULL && $id_category!= NULL) {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->image = $image;
      $this->prix = $prix;
      $this->id_category = $id_category;
    }
  } 
  
   
  
  // ==================== GETTERS ====================
    public function getId() {
         return $this->id;  
    }
    public function getName() {
         return $this->name;  
    }
    public function getDescription() {
         return $this->description;  
    }
    public function getImage() {
         return $this->image;  
    }
    public function getPrix() {
         return $this->prix;  
    }
    public function getId_category() {
         return $this->id_category;  
    }
  // ==================== SETTERS ====================

    public function setId($id) {
         $this->id = $id;
    }
    public function setName($name) {
         $this->name = $name;
    }
    public function setDescription($description) {
         $this->description = $description;
    }
    public function setImage($image) {
         $this->image = $image;
    }
    public function setPrix($prix) {
         $this->prix = $prix;
    }
    public function setId_category($id_category) {
         $this->id_category = $id_category;
    }

  
}
?>
