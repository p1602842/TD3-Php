<?php
/*
 * DS PHP
 * Vue page index - page d'accueil
 *
 * Copyright 2016, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 *
 */
?>

<!--  En tête de page -->
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>


<!--  Début de la page -->


<?php
if(isset($_GET['nomPhoto'])){
  foreach ($photo as $sel){
    if($sel->getNomFich() == $_GET['nomPhoto']){
      $image = PATH_IMAGES.$sel->getNomfich();
      $desc = $sel->getDescription()?>

      <div class = "col-md-6 col-sm-6 col-xs-12">
        <table class="table table-bordered"><tr><td>Description</td><td>
              <?php echo $sel->getDescription()?></td></tr>
          <tr><td>Nom du fichier</td><td><?php echo $sel->getNomfich()?></td></tr>
          <tr><td>Categorie</td><td><?php

              foreach($categorie as $nomCat){
                if($nomCat->getCatid() == $sel->getCatid()){
                  $lien = "index.php?nomCate=".$nomCat->getNomCat();
                  ?><a href=<?php echo $lien?>><?php echo $nomCat->getNomCat();?></a><?php
                }
              }
              ?></td></tr></table></div>
      <img src="<?php echo $image ?>" alt="<?php echo $desc?>"/><?php
    }
  }
}
?>
<?php require_once(PATH_VIEWS.'footer.php');?>
