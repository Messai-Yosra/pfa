<?php
/* c'est le DTO (Data Transfert Object) la
représentation objet d’une table, c’est-à-dire
l’objet métier. Il ne contient que des propriétés
et des accesseurs correspondants. */

require_once ("Model.php"); 

class ModelEvent extends Model{
//Même noms et ordre que dans la table utilisateur
  private $id;
  private $title ;
  private $image ;

  private $description ;
  private $start_date ;
  private $name_user ;
  private $createdAt ;


  protected static $table = 'event';
  protected static $primary = 'id';
   
  // ====== constructeur =======
    public function __construct(
        $title=NULL,
        $description=NULL,
        $start_date=NULL,
        $name_user=NULL,
        $createdAt=NULL
    ) {
        if ($title != NULL && $image!=NULL && $description != NULL && $start_date != NULL && $name_user != NULL && $createdAt != NULL) {
         
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->start_date = $start_date;
        $this->name_user = $name_user;
        $this->createdAt = $createdAt;
    
        }
    }
  
   
  
  // ==================== GETTERS ====================
    public function getId() {
         return $this->id;  
    }
    public function getTitle() {
         return $this->title;  
    }
    public function getImage() {
         return $this->image;  
    }
    public function getDescription() {
         return $this->description;  
    }
    public function getStart_date() {
         return $this->start_date;  
    }
    public function getName_user() {
         return $this->name_user;  
    }
    public function getCreatedAt() {
         return $this->createdAt;  
    }

  // ==================== SETTERS ====================

    public function setId($id) {
         $this->id = $id;
    }
    
    public function setTitle($title) {
         $this->title = $title;
    }

    public function setImage($image) {
         $this->image = $image;
    }
    public function setDescription($description) {
         $this->description = $description;
    }

    public function setStart_date($start_date) {
         $this->start_date = $start_date;
    }

    public function setName_user($name_user) {
         $this->name_user = $name_user;
    }

    public function setCreatedAt($createdAt) {
         $this->createdAt = $createdAt;
    }

  
}
?>
