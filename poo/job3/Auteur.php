<?php
require "Personne.php";
require "Livre.php";
class Auteur extends Personne {

    private $oeuvre = array();


    public function getOeuvre() {
        return $this->oeuvre;
    }

    public function setOeuvre($oeuvre) {
        array_push($this->oeuvre, $oeuvre);
    }

    
    public function listerOeuvre() {
        echo " Liste des oeuvres de l'auteur <br /> " ;

        foreach ($this->oeuvre as $e) {
            echo $e->getTitre() . "<br />";
        }
    }

    public function ecrireUnLivre($titre) {
        $this->setOeuvre(new Livre($titre));
    }

}