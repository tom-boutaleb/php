<?php
class Livre {

    private $titre;

    public function __construct($titre) {
        $this->titre = $titre;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setNom($titre) {
        $this->titre = $titre;
    }
}