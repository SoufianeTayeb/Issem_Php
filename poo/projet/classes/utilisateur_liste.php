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
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h2 {
            background-color: #007bff;
            color: white;
            padding: 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }

        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }
        input[type="submit"] {
                        background-color: #007bff;
                        color: white;
                        padding: 10px 20px;
                        margin-top: 10px;
                        cursor: pointer;
                    }

                    .center-button {
                        text-align: center;
                    }
    </style>
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
    <div class="center-button">
        <form action="../admin/utilisateur_ajout.php"><input type="submit" value="Ajouter un nouveau utilisateur"></form>
    </div>
</body>

</html>