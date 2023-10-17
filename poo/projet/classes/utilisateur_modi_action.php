<?php
include("../inc/connexion.php");
include("Utilisateur.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $u = Utilisateur::get_un($bdd, $id);
    if ($u) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $u->set_nom($_POST['nom']);
            $u->set_prenom($_POST['prenom']);
            $u->set_mail($_POST['mail']);
            $u->set_mdp($_POST['mdp']);
            $u->set_d_naissance($_POST['d_naissance']);

            if ($u->modifier($bdd)) {
                echo "Modification de l'utilisateur OK.";
            } else {
                echo "Erreur lors de la modification de l'utilisateur.";
            }
        } else {

?>
            <!DOCTYPE html>
            <html>

            <head>
                <title>Modifier un Utilisateur</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                    }

                    h2 {
                        background-color: #007bff;
                        color: white;
                        padding: 10px;
                    }

                    form {
                        width: 50%;
                        margin: 0 auto;
                    }

                    label {
                        display: block;
                        margin-top: 10px;
                    }

                    input[type="text"],
                    input[type="email"],
                    input[type="password"] {
                        width: 100%;
                        padding: 10px;
                        margin-top: 5px;
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
                <h2>Modifier un Utilisateur</h2>
                <form id="form_modification" name="form_modification" method="post" action="utilisateur_modi_action.php?id=<?= $id ?>">
                    <input type="text" name="nom" id="nom" value="<?= $u->get_nom() ?>">
                    <input type="text" name="prenom" id="prenom" value="<?= $u->get_prenom() ?>">
                    <input type="text" name="mail" id="mail" value="<?= $u->get_mail() ?>">
                    <input type="text" name="mdp" id="mdp" value="<?= $u->get_mdp() ?>">
                    <input type="text" name="d_naissance" id="d_naissance" value="<?= $u->get_d_naissance() ?>">
                    <div class="center-button">
                        <input type="submit" name="modifier" value="Modifier">
                    </div>
                </form>
                <div class="center-button">
                    <form action="../admin/utilisateur_ajout.php"><input type="submit" value="Ajouter un nouveau utilisateur"></form>
                </div>
                <div class="center-button">
         <form action="../classes/utilisateur_liste.php"><input type="submit" value="Retour à la liste des utilisateur"></form>
         </div>
            </body>

            </html>
<?php
        }
    } else {
        echo "Utilisateur introuvable.";
    }
} else {
    echo "ID de l'utilisateur non spécifié.";
}
?>