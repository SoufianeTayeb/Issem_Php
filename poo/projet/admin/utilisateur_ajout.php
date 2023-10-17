<!DOCTYPE html>
<html>
<head>
    <title>Nouvel utilisateur</title>
</head>
<body>
    <h2>Nouvel utilisateur</h2>
    <form id="form1" name="form1" method="post" action="utilisateur_ajout_action.php" >
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required value="<?= $utilisateur->get_nom() ?>"  ><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom"><br>

        <label for="mail">Mail:</label>
        <input type="email" name="mail" id="mail" required><br>

        <label for="mdp">Mot de passe:</label>
        <input type="password" name="mdp" id="mdp" required><br>

        <label for="d_naissance">Date de naissance (JJ/MM/AAAA):</label>
        <input type="text" name="d_naissance" id="d_naissance" placeholder="JJ/MM/AAAA"><br>

        <input type="submit" name="b_ajouter" value="Envoyer">
    </form>
</body>
</html>
