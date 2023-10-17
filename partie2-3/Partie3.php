<?php
require 'voiture.class.php';
class VoitureElectrique extends Voiture {
   private $autonomie;

   public function __construct($matricule, $marque, $modele, $annee, $autonomie) {
       parent::__construct($matricule, $marque, $modele, $annee);
       $this->autonomie = $autonomie;
   }

   public function getAutonomie() {
       return $this->autonomie;
   }

   public function setAutonomie($autonomie) {
       $this->autonomie = $autonomie;
   }

   public function AfficherAutonomie() {
       echo "Autonomie: " . $this->autonomie . " km<br>";
   }

   public function Afficher() {
       parent::Afficher();
       $this->AfficherAutonomie();
   }
}

?>