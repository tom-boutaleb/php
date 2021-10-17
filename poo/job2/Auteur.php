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
        foreach ($this->oeuvre as $e) {
            echo $e->getTitre();
        }
    }

    public function ecrireUnLivre($titre) {
        $this->setOeuvre(new Livre($titre));
    }

}