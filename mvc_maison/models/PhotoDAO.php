<?php

require_once(PATH_MODELS.'DAO.php');
require_once(PATH_ENTITY.'Photo.php');
class photoDAO extends DAO
{
    public function getPhotos(){

        $res = $this->queryAll('SELECT DISTINCT * FROM photo ');

        $photo=array();
        if($res)
        {
            foreach($res as $req){

            $photo[]=new photo($req['photoid'], $req['nomfich'], $req['description'],$req['catid']);
            }
            return $photo;

        }
        else {return false;}

    }
    public  function getnbphotos(){

        $res2=$this->queryRow('SELECT COUNT(*) FROM photo');
        return $res2[0].' photo(s) selectionee(s)';
    }

    public  function getnbphotos1(){

        $res2=$this->queryRow('SELECT COUNT(*) FROM photo where catid=1');
        return $res2[0].' photo(s) selectionee(s)';
    }
    public  function getnbphotos2(){

        $res2=$this->queryRow('SELECT COUNT(*) FROM photo where catid=2');
        return $res2[0].' photo(s) selectionee(s)';
    }
    public  function getnbphotos3(){

        $res2=$this->queryRow('SELECT COUNT(*) FROM photo where catid=3');
        return $res2[0].' photo(s) selectionee(s)';
    }
}
