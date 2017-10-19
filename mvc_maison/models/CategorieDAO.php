<?php

require_once(PATH_MODELS.'DAO.php');


class CategorieDAO extends DAO{
    public function getCategorie(){
        require_once(PATH_ENTITY.'Categorie.php');
        $res = $this->queryAll('SELECT * FROM categorie');
        $categorie = array();
        if($res){
            foreach($res as $req){
                $categorie[] = new categorie($req['catid'], $req['nomcat']);
            }
        }else{
            return null;
        }
        return $categorie;
    }
}
