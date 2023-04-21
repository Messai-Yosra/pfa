<?php
/* c'est le DTO (Data Transfert Object) la
représentation objet d’une table, c’est-à-dire
l’objet métier. Il ne contient que des propriétés
et des accesseurs correspondants. */

require_once ("Model.php"); 

class ModelUtilisateur extends Model{
//Même noms et ordre que dans la table utilisateur
  private $id;
  private $usernme;
  private $name;
  private $adresse;
  private $password;
  private $createdAt;


  protected static $table = 'user';
  protected static $primary = 'id';
   
  public function __construct( 
    $username=NULL,
    $name=NULL,
    $adresse=NULL,
    $password=NULL,
    $createdAt=NULL
  ) {
    if ($username != NULL && $name != NULL && $adresse != NULL && $password != NULL && $createdAt != NULL) {
      $this->id = $id;
      $this->username = $username;
      $this->name = $name;
      $this->adresse = $adresse;
      $this->password = $password;
      $this->createdAt = $createdAt;
    }
  }
  
  
  // ==================== GETTERS ====================
  public function getId() {
     return $this->id;  
  }
  public function getUsername() {
      return $this->username;  
  }
  public function getName() {
      return $this->name;  
  }
  public function getAdresse() {
      return $this->adresse;  
  }
  public function getPassword() {
      return $this->password;  
  }
  public function getCreatedAt() {
      return $this->createdAt;  
  }

  // ==================== SETTERS ====================

  public function setId($id2) {
       $this->id = $id2;
  }
  public function setUsername($username2) {
       $this->username = $username2;
  }
  public function setName($name2) {
       $this->name = $name2;
  }
  public function setAdresse($adresse2) {
       $this->adresse = $adresse2;
  }
  public function setPassword($password2) {
       $this->password = $password2;
  }
  public function setCreatedAt($createdAt2) {
       $this->createdAt = $createdAt2;
  }

  
}
?>
