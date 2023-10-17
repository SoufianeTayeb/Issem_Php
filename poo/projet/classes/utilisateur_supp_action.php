<?php
include("../inc/connexion.php");
include("../classes/Utilisateur.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $u = Utilisateur::get_un($bdd, $id);
    if ($u) {
        if ($u->supprimer($bdd)) {
            echo "Suppression de l'utilisateur OK.";
        } else {
            echo "Erreur lors de la suppression de l'utilisateur.";
        }
    } else {
        echo "Utilisateur introuvable.";
    }
} else {
    echo "ID de l'utilisateur non spécifié.";
}
?>
