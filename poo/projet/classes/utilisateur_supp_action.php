<?php
include("../inc/connexion.php");
include("../classes/Utilisateur.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $u = Utilisateur::get_un($bdd, $id);
    if ($u) {
        if ($u->supprimer($bdd)) {
            header("Location: utilisateur_liste.php?message=suppression de l'utilisateur OK");
        } else {
            header("Location: utilisateur_liste.php?message=Erreur lors de la supression de l'utilisateur");
        }
    } else {
        echo "Utilisateur introuvable.";
    }
} else {
    echo "ID de l'utilisateur non spécifié.";
}
?>
