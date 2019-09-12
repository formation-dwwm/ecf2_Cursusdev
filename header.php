<?php

require_once 'main.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
<?php


?>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <h3 tabindex="0" >Enregistrement utilisateurs</h3>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" role="menu">
        <li class="nav-item <?php echo $activeAccueil; ?>" style="margin-left:30px;">
          <a class="nav-link" href="./index.php" tabindex="1">Accueil</a>
        </li>
        <li class="nav-item <?php echo $activeCreate; ?>">
          <a class="nav-link" href="./form.php" tabindex="2">Create</a>
        </li>
        <li >

        </li>
      </ul>
        <select class="form-control" name="idS" style="margin-left:150px;width:250px;">
          <?php foreach ($dataServices as $key => $value) {
          ?>
          <option value="<?php echo $dataServices[$key]->{'idS'}; ?>"><?php echo $dataServices[$key]->{'nameService'}; ?></option>
          <?php
          }
          ?>
        </select>
    </div>
  </nav>

