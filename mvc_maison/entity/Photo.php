<?php

class Photo{
    private $_photoId;
    private $_nomFich;
    private $_description;
    private $_catId;

    public function __construct($photoId,$nomFich,$description,$catId){
        $this->_photoId = $photoId;
        $this->_nomFich = $nomFich;
        $this->_description = $description;
        $this->_catId = $catId;

    }
    public function getPhotoId() {
        return $this->_photoId;
    }
    public function getNomFich() {
        return $this->_nomFich;
    }
    public function getDecription() {
        return $this->_description;
    }
    public function getCatId() {
        return $this->_catId;
    }
}
