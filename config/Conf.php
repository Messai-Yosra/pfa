<?php
class Conf {
  static private $debug = True;
  // static private $databases = array(
  //   'hostname' => 'localhost',
  //   'database' => 'pfa',
  //   'login' => 'root',
  //   'password' => ''
  // );
   
  static private $databases = array(
    'hostname' => 'mysql-forest-time.alwaysdata.net',
    'database' => 'forest-time_pfa',
    'login' => '311983',
    'password' => 'azertyyt123'
  );
  static public function getLogin() {
    return self::$databases['login'];
  }
  
  static public function getHostname(){
	  return self::$databases['hostname'];
  }
  
  static public function getDatabase(){
	  return self::$databases['database'];
  }

  static public function getPassword(){
	  return self::$databases['password'];
  }
  
  static public function getDebug() {
      return self::$debug;
  }
}
?>
