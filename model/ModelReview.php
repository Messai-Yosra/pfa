<?php
/* c'est le DTO (Data Transfert Object) la
représentation objet d’une table, c’est-à-dire
l’objet métier. Il ne contient que des propriétés
et des accesseurs correspondants. */

require_once ("Model.php"); 

class ModelReview extends Model{
//Même noms et ordre que dans la table utilisateur
  private $id;
  private $name_category ;


  protected static $table = 'category';
  protected static $primary = 'id';
   
  // ====== constructeur =======
  public function __construct($name_category) {
    if ($name_category != NULL) {
      $this->name_category = $name_category ;
    }
  }
  
   
  
  // ==================== GETTERS ====================
    public function getId() {
         return $this->id;  
    }
    public function getName_category() {
         return $this->name_category;  
    }
  // ==================== SETTERS ====================

    public function setId($id) {
         $this->id = $id;
    }
    public function setName_category($name_category) {
         $this->name_category = $name_category;
    }

  
}
?>
