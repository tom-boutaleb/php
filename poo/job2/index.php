<?php
require "Auteur.php";
$Auteur = New Auteur();
$Auteur->setPrenom("Victor");
$Auteur->setNom("Hugo");
$Auteur->ecrireUnLivre("Les Misérables");
$Auteur->ecrireUnLivre("Les Misérables");
$Auteur->listerOeuvre();
//var_dump($Auteur);
?>