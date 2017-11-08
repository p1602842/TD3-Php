<?php

if(isset($_GET['message'])){
    
    $erreur = htmlspecialchars($_GET['message']);
    $alert = choixAlert($erreur); 
}

if(isset($_POST['login'])&&isset($_POST['password'])){
    $log_entre = htmlspecialchars($_POST['login']);
    $pswd_entre = htmlspecialchars($_POST['password']);
    if($log_entre==LOGIN){
        if(sha1($pswd_entre) == PASSWORD){
            $_SESSION['logged'] = true;
            header("Location: index.php?page=connexion&message=connecte");
            
        }
        else{
            header("Location: index.php?page=connexion&message=mdp");
            exit();
        }
    }
    else{
        header("Location: index.php?page=connexion&message=log");
            exit();
    }
}

require_once(PATH_VIEWS.'v_connexion.php');