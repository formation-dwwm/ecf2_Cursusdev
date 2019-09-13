<?php

require_once 'header.php';
require_once 'classes/db.php';
require_once 'classes/users.php';
require_once 'classes/services.php';


/* Classes actives menu */
if (isset($_SERVER['REQUEST_URI'])) {
  $activeAccueil = ($_SERVER['REQUEST_URI'] == '/ecf2_Cursusdev/index.php') ? 'active' : '';
  $activeCreate = ($_SERVER['REQUEST_URI'] == '/ecf2_Cursusdev/form.php') ? 'active' : ''; 
}

/* Instancie la classe de connection à la base de données */
try
{
  $db = Db::get_db();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo $e->getMessage();
}

$users = new Users($db);
$services = new Services($db);

/* Récupération des valeurs du formulaire */
if (isset($_POST['form']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['birthday']) && isset($_POST['adress1']) && isset($_POST['adress2']) && isset($_POST['postal']) && isset($_POST['phone'])) {
  $idS = $_POST['idS'];

  if ($idS == 0) {
    $IDSnull = '<span style="color:blue";>Veuillez faire un choix de service</span>';
  } else {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $birthday = $_POST['birthday'];
    $adress1 = $_POST['adress1'];
    $adress2 = $_POST['adress2'];
    $postal = $_POST['postal'];
    $phone = $_POST['phone'];
    
    // var_dump(array($firstName, $lastName, $birthday, $adress1, $adress2, $postal, $phone, $idS));
    $users->post_users($firstName, $lastName, $birthday, $adress1, $adress2, $postal, $phone, $idS, $db);
    header('location:index.php');
  }
}

if (isset($_POST['delete']) && !empty($_POST['delete']) && isset($_POST['idU'])) {

    $idU = $_POST['idU'];
    $users->delete_users($idU, $db);
}

$idSMenu = "choix";
if (isset($_POST['idSMenu'])) {
  $idSMenu = $_POST['idSMenu'];
  // echo $idSMenu;

  // $valueIndex = isset($_POST['valueIndex']);
  // echo $valueIndex;

    if ($idSMenu == "choix") {
      $jointure = $users->get_USERSjointure($db);
      // var_dump($jointure);

    } else {
      $jointure = $users->get_IDjointure($idSMenu, $db);
    }
}

$dataUsers = $users->get_users($db);
  // var_dump($dataUsers);

$dataServices = $services->get_services($db);
// var_dump($dataServices);

// Retourne true si le menu sélectionné correspond à $keyToCheck
// On utilise une fonction anonyme ici, de façon a pouvoir capturer une variable extérieure ($idSMenu)
$echoMenuSelected = function($keyToCheck) use ($idSMenu) {
  echo ($idSMenu === $keyToCheck ? 'selected' : '');
};

require_once 'footer.php';



?>