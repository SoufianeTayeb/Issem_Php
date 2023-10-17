<?php
require 'Partie1.php'; // Inclure le fichier Chaine.php

// Texte d'origine
$texte = "Codeur Web ISEEM";

// Instanciation de la classe Chaine
$chaine = new Chaine($texte);

// Utilisation des méthodes pour formater le texte
$texteGras = $chaine->gras();
$texteItalique = $chaine->italique();
$texteSouligne = $chaine->souligne();
$texteMajuscule = $chaine->majuscule();

// Affichage des résultats
echo "Gras: " . $texteGras . "<br>";
echo "Italique: " . $texteItalique . "<br>";
echo "Souligné: " . $texteSouligne . "<br>";
echo "Majuscule: " . $texteMajuscule . "<br>";
?>