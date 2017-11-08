<?php
if(isset($_GET['message'])){
    
    $erreur = htmlspecialchars($_GET['message']);
    $alert = choixAlert($erreur); 
}
    if(isset($_SESSION['logged'])){
        require_once(PATH_MODELS.'CategorieDAO.php');
        require_once(PATH_MODELS.'PhotoDAO.php');
        $extensions = array('.png', '.gif', '.jpeg');
        $taillemax = 102400;
        $catDAO=new CategorieDAO();
        $cat = $catDAO->getAllCat();
        $Cat_erreur = $catDAO->getErreur();
        
        
        if(isset($_FILES['choix_fichier'])){
            $extension = strrchr($_FILES['choix_fichier']['name'], '.');
            $taille_fichier = filesize($_FILES['choix_fichier']['tmp_name']);
                
            if(!in_array($extension, $extensions)){
                header("Location: index.php?page=ajout&message=ext");
            }
            elseif($taille_fichier>$taillemax){
                header("Location: index.php?page=ajout&message=taille");
            }
            elseif($_POST['choix_categorie'] == 0){
                header("Location: index.php?page=ajout&message=cat");
            }
            elseif(!preg_match('#[a-zA-Z]#' ,$_POST['description'])){
                header("Location: index.php?page=ajout&message=desc");
            }
            else{
                $catid = htmlspecialchars($_POST['choix_categorie']);
                $desc = htmlspecialchars($_POST['description']);
                
                $photoDAO =new PhotoDAO();
                $id = $photoDAO->getLastId();
                $nomFich = 'DSC'.$id.$extension;
                $photoDAO->addPhoto($catid, $desc, $nomFich);
                $lastid = $photoDAO->getLastId();
                if($id != $lastid){
                    $id = $lastid;
                    $nomFich = 'DSC'.$id.$extension;
                    $photoDAO->updateNomFich($id, $nomFich);
                }
                
                $nouvNom=PATH_IMAGES.$nomFich;            
                move_uploaded_file($_FILES['choix_fichier']['tmp_name'], $nouvNom);
                header("Location: index.php?page=photo&id=".$id);
            }
        }
        
        
        require_once(PATH_VIEWS.'v_ajout.php');

    }
    else {
        header("Location: index.php");
    }