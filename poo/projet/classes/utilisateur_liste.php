<?php
include("../inc/connexion.php");
include("../classes/Utilisateur.php");

// Récupérez la liste des utilisateurs
$utilisateurs = Utilisateur::get_liste($bdd);


?>
 <!-- Affichez la liste des utilisateurs sous forme de tableau HTML -->
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Utilisateurs</title>
</head>
<body>
    <h2>Liste des Utilisateurs</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($utilisateurs as $utilisateur) : ?>
            <tr>
                <td><?= $utilisateur->get_id() ?></td>
                <td><?= $utilisateur->get_nom() ?></td>
                <td><?= $utilisateur->get_prenom() ?></td>
                <td><?= $utilisateur->get_mail() ?></td>
                <td>
                <a href="utilisateur_modi_action.php?id=<?= $utilisateur->get_id() ?>">Modifier</a>
                <a href="utilisateur_supp_action.php?id=<?= $utilisateur->get_id() ?>">Supprimer</a>
                </td>
            </tr>
            
        <?php endforeach; ?>
    </table>
</body>
</html>
