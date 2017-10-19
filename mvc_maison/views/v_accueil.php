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
//  En tête de page
?>
<?php require_once(PATH_MODELS.'photoDAO.php');?>
<?php require_once(PATH_VIEWS.'header.php');?>

<!--  Zone message d'alerte -->
<?php require_once(PATH_VIEWS.'alert.php');?>

<!--  Début de la page -->
<h1><?= TITRE_PAGE_ACCUEIL_TOUS ?></h1>


<form method="POST" action="">
    <label>

        <select name="photo"/>
        <option value="0">Toutes les categories</option>
        <option value="1">Animaux</option>
        <option value="2">Repas</option>
        <option value="3">Monuments</option>

        </select>

        <input type="submit" value="Valider"/>
    </label>
</form>


<?php
if((isset($_POST['photo']) and $_POST['photo'] != 0)) {
    if (($_POST['photo']) == 1) {
        $nbr = (new PhotoDAO())->getnbphotos1();
//sel pour selectionee
        echo '<div class="alert alert-success"><strong>';
        echo $nbr;
        echo '</strong></div>';
        foreach ($photo as $sel) {
            if ($sel->getcatid() == 1) {

                $img = PATH_IMAGES.$sel->getNomfich();
                ?>
                <img src="<?php echo $img ?>" alt=""><?php
            }

        }

    } else if (($_POST['photo']) == 2) {
        $nbr = (new PhotoDAO())->getnbphotos2();

        echo '<div class="alert alert-success"><strong>';
        echo $nbr;
        echo '</strong></div>';
        foreach ($photo as $sel) {
            if ($sel->getcatid() == 2) {
                $img = PATH_IMAGES . $sel->getNomfich();
                ?>
                <img src="<?php echo $img ?>" alt=""><?php
            }
        }
    } else if (($_POST['photo']) == 3) {
        $nbr = (new PhotoDAO())->getnbphotos3();

        echo '<div class="alert alert-success"><strong>';
        echo $nbr;
        echo '</strong></div>';
        foreach ($photo as $sel) {
            if ($sel->getcatid() == 3) {
                $img = PATH_IMAGES . $sel->getNomfich();
            }
            ?>
            <img src="<?php echo $img ?>" alt=""><?php
        }
    }
}

else  {
    $nbr = (new PhotoDAO())->getnbphotos();

    echo '<div class="alert alert-success"><strong>';
    echo $nbr;
    echo '</strong></div>';

    foreach ($photo as $sel) {

        $img = PATH_IMAGES . $sel->getNomfich();
        ?>
        <img src="<?php echo $img ?>" alt=""><?php
    }
}

?>






<!--  Fin de la page -->

<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'footer.php');?>
