<?php

class Personne {
    protected $nom;
    protected $prenom;

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function sePresenter() {
        echo $this->nom . " " . $this->prenom . "<br />";
    }
}