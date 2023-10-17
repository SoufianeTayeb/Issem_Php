<?php
class Chaine {
   private $texte;

   public function __construct($texte) {
       $this->texte = $texte;
   }

   public function gras() {
       return "<strong>{$this->texte}</strong>";
   }

   public function italique() {
       return "<em>{$this->texte}</em>";
   }

   public function souligne() {
       return "<u>{$this->texte}</u>";
   }

   public function majuscule() {
       return strtoupper($this->texte);
   }
}
?>
