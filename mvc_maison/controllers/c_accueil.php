<?php
/*
 * DS PHP
 * Controller page accueil
 *
 * Copyright 2017, Eric Dufour
 * http://techfacile.fr
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

require_once(PATH_MODELS.'photoDAO.php');
require_once(PATH_MODELS.'CategorieDAO.php');
$photoDAO=new photoDAO(DEBUG);
$catDAO = new CategorieDAO(DEBUG);
$categorie = $catDAO->getCategorie();

$photo=$photoDAO->getPhotos();

if (isset($_GET['nom']))
{
    $nom =  htmlspecialchars($_GET['nom']);
}

//traitement des probl�mes de login
if(isset($_GET['message']))
{
    $message = htmlspecialchars($_GET['message']);
    $alert = choixAlert($message);
}
require_once(PATH_VIEWS.$page.'.php');

?>
