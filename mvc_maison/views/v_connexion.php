<?php require_once(PATH_VIEWS.'v_header.php');?>
<?php require_once(PATH_VIEWS.'v_alert.php');?>


<?php if(!isset($_SESSION['logged'])) { ?>
<h1><?php  echo TITRE_PAGE_CONNEXION;?></h1>

<form method= "POST" action="index.php?page=connexion">
    <label>login :
        <input type="text" name="login" size="12" maxlength="12">
    </label>
    <label for="passwoord">Mot de passe :
        <input type="password" id="password" name="password" size="12" maxlength="50">
    </label>
    <input type="submit" value="Se connecter">
</form>


<?php }
require_once(PATH_VIEWS.'v_footer.php');


