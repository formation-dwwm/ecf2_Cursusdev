<?php

require_once 'header.php';

?>
<div class="container" style="margin-left:auto;margin-right:auto;">

  <form  method="POST" style="width:700px;margin-left:auto;margin-right:auto">
    <div class="form-group">
        Prenom: <input type="text" class="form-control" name="firstName" value="Cursusdev" />
        Nom: <input type="text" class="form-control" name="lastName" value="Dev" />
        Date de naisance: <input type="date" class="form-control" name="birthday" value="2000-05-05" />
        Adresse1: <input type="text" class="form-control" name="adress1" value="Avenue Charles de Gaule" />
        Adresse2: <input type="text" class="form-control" name="adress2" value="Résidence Beauséjour" />
        Code Postal: <input type="text" class="form-control" name="postal" value="83200" />
        Numéro téléphone: <input type="text" class="form-control" name="phone" value="06-07-08-09-10" />
        Nom de service:
        <select class="form-control" name="idS">
          <option value="0" selected>Choix de service</option>
          <?php foreach ($dataServices as $key => $value) {
          ?>
          <option value="<?php echo $dataServices[$key]->{'idS'}; ?>"><?php echo $dataServices[$key]->{'nameService'}; ?></option>
          <?php
          }
          ?>
        </select>
        <?php if (isset($IDSnull)) { echo $IDSnull; } ?>
    </div>
    <input type="submit" class="btn btn-primary" name="form" value="Ajouter" />
  </form>

</div>
<?php


require_once 'footer.php';


?>