<?php
include("../classes/Mysql.php"); // Assurez-vous que le chemin d'inclusion est correct.

$bdd = new Mysql();
$bdd->set_serveur("localhost");
$bdd->set_login("root"); // Remplacez par le nom d'utilisateur de la base de données.
$bdd->set_mdp(""); // Remplacez par le mot de passe de la base de données.
$bdd->set_bdd("travail_collaboratif"); // Remplacez par le nom de la base de données.
$bdd->connexion();
?>