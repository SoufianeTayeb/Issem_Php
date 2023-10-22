<?php
include("../inc/connexion.php");
include("../classes/Utilisateur.php");

$u = new Utilisateur();
$u->set_nom($_POST['nom']);
$u->set_prenom($_POST['prenom']);
$u->set_mail($_POST['mail']);
$u->set_mdp($_POST['mdp']);
$u->set_d_naissance($_POST['d_naissance']);

// if ($u->enregistrer($bdd)) {
//     echo "Ajout utilisateur OK.";
// } else {
//     echo "Erreur lors de l'ajout de l'utilisateur.";
// }
if ($u->enregistrer($bdd)) {
    $response = array("success" => true, "message" => "Ajout utilisateur ok.");
} else {
    $response = array("success" => false, "message" => "Erreur lors de l'ajout de l'utilisateur.");
}

// Convertir la réponse en format JSON
echo json_encode($response);
?>
