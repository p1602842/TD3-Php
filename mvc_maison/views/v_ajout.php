<?php require_once(PATH_VIEWS.'v_header.php');?>
<?php require_once (PATH_VIEWS.'v_alert.php');?>
<?php require_once(PATH_ENTITY.'Categorie.php'); ?>

<!--Formulaire-->

<h1><?php echo TITRE_AJOUT;?></h1>
<form method= "POST" action="index.php?page=ajout" enctype="multipart/form-data">
<div class="form-group">
<label for="choix_fichier">Choisir le fichier :</label>
<input type="file" name="choix_fichier" id="choix_fichier">
<input type="hidden" name="MAX_FILE_SIZE" value="102400" />
</div>

<div class="form-group">
<label for="description">Décrire la photo en une phrase :</label><br>
<textarea id="description" name="description" rows="3" cols="30"></textarea>
</div>

<div class="form-group">
<label for="choix_categorie">Choisir une catégorie :</label>
<select  name = "choix_categorie" id="choix_categorie">
    <option value="0">Choix catégorie: </option>
     <?php foreach($cat as $categorie){
            echo '<option value="'.$categorie->getCatId().'">'.$categorie->getNomCat().'</option>';}?>
</select>
</div>

<button type="submit" class="btn">Envoyer</button>
</form>


<!--  Pied de page -->
<?php require_once(PATH_VIEWS.'v_footer.php');
