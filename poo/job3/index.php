<?php
require "Auteur.php";
require "Bibliotheque.php";
require "Client.php";
$bibliotheque = new Bibliotheque();
$auteur = new Auteur();
$auteur->setPrenom("Victor");
$auteur->setNom("Hugo");
$client = new Client();
$client->setPrenom("Victor");
$client->setNom("Hugo");
$auteur->ecrireUnLivre("Les Misérables");
$auteur->ecrireUnLivre("Notre Dame de Paris");
$auteur->ecrireUnLivre("L'homme qui rit");
$auteur->listerOeuvre();
$bibliotheque->acheterUnLivre($auteur, "Les Misérables", 6);
$bibliotheque->acheterUnLivre($auteur, "Notre Dame de Paris", 60);
$bibliotheque->acheterUnLivre($auteur, "Notre Dame de Paris", 60);
$bibliotheque->inventaire();
$bibliotheque->louer($client, "Les Misérables");
$bibliotheque->louer($client, "Notre Dame de Paris");
$bibliotheque->inventaire();
$client->inventaire();
$bibliotheque->rendreLivre($client);
$bibliotheque->inventaire();


$client->inventaire();
//var_dump($bibliotheque);

//var_dump($Auteur);
?>