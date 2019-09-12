<?php

require_once 'header.php';

?>


<div class="container" style="margin-left:auto;margin-right:auto;">

  <hr />
  <div class="container">
    <table class="table table-bordered" style="margin-left:auto;margin-right:auto;">
      <thead class="thead-light">
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Date de naissance</th>
          <th scope="col">Adresse1</th>
          <th scope="col">Adresse2</th>
          <th scope="col">Code postal</th>
          <th scope="col">Numéro de tél.</th>
          <th scope="col">Services</th>
          <th scope="col" collapse="2">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if (isset($jointure)) { foreach ($jointure as $key => $value) {
          $idU =  $jointure[$key]->{'idU'};
          ?>
          <tr>
            <td><?php echo $jointure[$key]->{'firstName'}; ?></td>
            <td><?php echo $jointure[$key]->{'lastName'}; ?></td>
            <td><?php echo $jointure[$key]->{'birthday'}; ?></td>
            <td><?php echo $jointure[$key]->{'adress1'}; ?></td>
            <td><?php echo $jointure[$key]->{'adress2'}; ?></td>
            <td><?php echo $jointure[$key]->{'postal'}; ?></td>
            <td><?php echo $jointure[$key]->{'phone'}; ?></td>
            <td><?php echo $jointure[$key]->{'nameService'}; ?></td>
            <td>
              <form method="POST">
                  <input type="submit" class="btn btn-danger" name="delete" value="X" />
                  <input type="hidden" class="btn btn-warning" name="idU" value="<?php echo $idU; ?>" />
              </form>
            </td>
          </tr>
          <?php
          }
        }
        ?>
      </tbody>
    </table>

  </div>

</div>
<?php


require_once 'footer.php';




?>