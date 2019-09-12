<?php

class Services {

  /* Objet PDO à utiliser pour les opérations de base de données phpecf2 */
  private static $services;

  private $idS;

  /* Constructeur; il prend l'objet $db en argument, passé par référence */
  public function __construct(&$db) {
    $this->db = $db;
  }

  /* Obtenir tous les services */
  public static function get_services(&$db) {

    try {
    
      // requête toute la base de donnée pour les actions modifier et supprimer
      $req = $db->prepare('SELECT idS, nameService, descriptionService FROM services;');
      $req->execute();
      $req->setFetchMode(PDO::FETCH_OBJ);
      $services = $req->fetchAll();

    } catch (PDOException $e) {
      /* Exception (erreur SQL) */
      echo $e->getMessage();
      return false;
    }
    /* Si aucune exception ne se produit, retourne true */
    return $services;
  }


}


?>