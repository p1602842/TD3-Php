<?php

class Categorie
{
    private $_nomcat;

    private $_catid;

    public function __construct($catid = 0, $nomcat = "")
    {
        $this->_nomcat = $nomcat;
        $this->_catid = $catid;
    }

    public function getNomCat() {
        return $this->_nomcat;
    }

    public function setNomCat($nomcat){
        $this->_nomcat = $nomcat;
    }

    public function getCatid() {
        return $this->_catid;
    }

    public function setCatid($catid){
        $this->_catid = $catid;
    }

}
