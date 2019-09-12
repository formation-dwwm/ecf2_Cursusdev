<?php

class Db {

  /* Objet PDO à utiliser pour les opérations de base de données phpAuth */
  private static $db;
  
  /* Objet PDO à utiliser pour les opérations de base de données phpAuth */
  private $connection_db;
  
  const DB_USERNAME = 'cursusdev';
  const DB_PASSWORD ='cursus@2019';
  
  /* Constructeur */
  private function __construct() {
      $this->connection_db = new PDO('mysql:host=localhost:3305;dbname=phpecf2', self::DB_USERNAME, self::DB_PASSWORD);
  }
  
  /* Permet la connection à la base de données phpService */
  public static function get_db() {
      if (self::$db == null) {
          self::$db = new Db();
      }
      return self::$db->connection_db;
  }

}
