<?php
require_once(PATH_MODELS.'Connexion.php');
abstract class DAO 
{
  public function requete($sql, $args = null)  
  {
    if ($args == null) 
    {
	$resultat = Connexion::getInstance()->getBdd()->query($sql);// exécution directe
    }
    else 
    {
	$resultat = Connexion::getInstance()->getBdd()->prepare($sql);// requête préparée
	$resultat->execute($args);
    }
    return $resultat;
  }
  
}
