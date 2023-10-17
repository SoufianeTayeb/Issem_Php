<?php
class Voiture {
    private $matricule;
    private $marque;
    private $modele;
    private $annee;

    public function __construct($matricule, $marque, $modele, $annee) {
        $this->matricule = $matricule;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
    }
    public function Afficher() {
      echo "Matricule: " . $this->getMatricule() . "<br>";
      echo "Marque: " . $this->getMarque() . "<br>";
      echo "Modèle: " . $this->getModele() . "<br>";
      echo "Année: " . $this->getAnnee() . "<br>";
  }

    public function getMatricule() {
        return $this->matricule;
    }

    public function getMarque() {
        return $this->marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function getAnnee() {
        return $this->annee;
    }
}
?>
