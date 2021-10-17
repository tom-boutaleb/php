<?php
class Bibliotheque {
    private $name;
    private $catalogue = array();

    public function acheterUnLivre($auteur, $livre, $qt) {
        foreach ($auteur->getOeuvre() as $e) {
            if ($e->getTitre() === $livre) {
                for ($i=0; $i < count($this->catalogue) ; $i++) { 
                    if ($this->catalogue[$i][0]->getTitre() === $livre) {
                        $this->catalogue[$i][1] = $this->catalogue[$i][1] + $qt;
                        return 0;
                    };
                }
            }
            if ($e->getTitre() === $livre) {
                if (empty($this->catalogue)) {
                    $this->catalogue[0] = array($e, $qt);
                    return 0;
                }
                array_push($this->catalogue, array($e, $qt));
                return 0;
            }
        }
         echo "Le livre n'existe pas dans la bibliographie de l'auteur.";
    }

    public function inventaire() {
        echo " Inventaire Bibliothèque <br /> " ;
        for ($i=0; $i < count($this->catalogue) ; $i++) { 
            echo $this->catalogue[$i][0]->getTitre();
            echo " stocks: " ;
            echo $this->catalogue[$i][1] . "<br />";
        }
    }

    public function louer($client, $titre) {
        for ($i=0; $i < count($this->catalogue) ; $i++) { 
            if ($this->catalogue[$i][0]->getTitre() === $titre) {
                $newCollection = $client->getCollection();
                array_push($newCollection, $this->catalogue[$i][0]);
                $this->catalogue[$i][1]--;
                $client->setCollection($newCollection);
                echo "Le client loue $titre <br />";
                return 0;
            } 
        }
        echo "Le livre n'existe pas, on ne peut pas le louer.";
    }

    public function rendreLivre($client) {
        
        foreach ($client->getCollection() as $livre) {
            $newCollection = array();

            for ($i=0; $i < count($this->catalogue) ; $i++) { 
                if( $this->catalogue[$i][0]->getTitre() === $livre->getTitre()) {
                    $this->catalogue[$i][1]++;
                } 
            }
            $client->setCollection($newCollection);

        }
        echo "Le client rends ses livre. <br />";
    }




}