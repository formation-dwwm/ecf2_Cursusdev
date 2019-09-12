<?php

class Users {


  /* Objet PDO à utiliser pour les opérations de base de données phpecf2 */
  private $db;

  private $idU;
  private $firstName;
  private $lastName;
  private $birthday;
  private $adress1;
  private $adress2;
  private $postal;
  private $phone;

  // private $users;

  //  /* GETTERS PUBLICS */
  // public function getUsers() {
  //   return $this->users;
  // }

  /* Constructeur; il prend l'objet $db en argument, passé par référence */
  public function __construct(&$db) {
    $this->db = $db;
  }

  /* Obtenir tous les utilisateurs */
  public static function get_users(&$db) {
 
    try {
      // requête toute la base de donnée pour les actions modifier et supprimer
      $req = $db->prepare('SELECT idU, firstName, lastName, birthday, adress1, adress2, postal, phone, services FROM users;');
      $req->execute();
      $req->setFetchMode(PDO::FETCH_OBJ);
      $users = $req->fetchAll();

    } catch (PDOException $e) {
      /* Exception (erreur SQL) */
      echo $e->getMessage();
      return false;
    }
    /* Si aucune exception ne se produit, retourne true */
    return $users;
  }

  /* Creation d'utilisateur */
  public static function post_users($firstName, $lastName, $birthday, $adress1, $adress2, $postal, $phone, $idS, &$db) {

    try {
       // Insertion des données dans la base de données
       $req = $db->prepare('INSERT INTO users (firstName, lastName, birthday, adress1, adress2, postal, phone, services) VALUES (?, ?, ?, ?, ?, ?, ?, ?);');
       $req->execute(array($firstName, $lastName, $birthday, $adress1, $adress2, $postal, $phone, $idS));

    } catch (PDOException $e) {
      /* Exception (erreur SQL) */
      echo $e->getMessage();
      return false;
    }
    /* Si aucune exception ne se produit, retourne true */
    return true;
  }

  /* Supprimer un utilisateur */
  public static function delete_users($idU, &$db) {

    try {

        // Supprimer des données
        $req = $db->prepare('DELETE FROM users WHERE idU=:idU;');
        $req->execute(array(
            ':idU' => $idU
        ));

    } catch (PDOException $e) {
        /* Exception (erreur SQL) */
        echo $e->getMessage();
        return false;
    }
   /* Si aucune exception ne se produit, retourne true */
   return true;
  }


}


?>