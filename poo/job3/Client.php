<?php 
class Client extends Personne {
    private $collection = array();

    public function inventaire() {
        echo " Inventaire Client <br /> " ;

        foreach ($this->collection as $key) {
            echo $key->getTitre() . "<br />";
        }
    }

    public function getCollection() {
        return $this->collection;
    }

    public function setCollection($collection) {
        $this->collection = $collection;
    }



}